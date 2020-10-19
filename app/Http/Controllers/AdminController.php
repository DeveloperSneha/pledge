<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth:web');
    }
    
    
    public function index()
    {
        $districts = \App\District::where('idState','=','6')->orderBy('idDistrict')->pluck('districtName', 'idDistrict')->toArray();  
        return view('admin.dashboard', compact('districts'));
    }
    
    public function getPledgeStateWise()
    {
        $st =\App\Candidate::get()->pluck('state')->toArray();
        $states =\App\State::whereIn('idState',$st)->pluck('stateName','idState')->toArray();
        return view('admin.statewise',compact('states'));
    }
    
    public function getPledgeDistrictWise()
    {   $dis =\App\Candidate::get()->pluck('district')->toArray();
        $districts = \App\District::whereIn('idDistrict',$dis)->orderBy('idDistrict')->pluck('districtName', 'idDistrict')->toArray();  
        return view('admin.districtwise',compact('districts'));
    }
    
    public function getCandidates(Request $request)
    {   
//        $candidates =\App\Candidate::get();
        if (!request()->ajax()) {
            return view('admin.candidates');
        }
        $columns = array(
            0 => 'idCandidate',
            1 => 'name',
            2 => 'gender',
            3 => 'email',
            4 => 'mobile',
            5 => 'state',
            6 => 'district',
            7 => 'isTestTaken'
        );
        $candidates = DB::table('candidates')
                        ->join('states','candidates.state','=','states.idState')
                        ->join('districts','candidates.district','=','districts.idDistrict')
                        ->select('idCandidate','districtName','states.stateName','name','mobile','email','isTestTaken','gender');
                        
        $totalData = $candidates->count();
        $totalFiltered = $totalData;
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        if (empty($request->input('search.value'))) {
            if ($limit == '-1') {
                $candidates =$candidates->orderBy($order, $dir)->get();                
            }else{
                $candidates =$candidates->offset($start)->limit($limit)->orderBy($order, $dir)->get();
            }
        }else{
            $search = $request->input('search.value');
            if ($limit == '-1') {
                $candidates = DB::table('candidates')
                                ->join('states','candidates.state','=','states.idState')
                                ->join('districts','candidates.district','=','districts.idDistrict')
                                ->where('idCandidate', 'LIKE', "%{$search}%")
                                ->orWhere('name', 'LIKE', "%{$search}%")
                                ->orWhere('gender', 'LIKE', "%{$search}%")
                                ->orWhere('districtName', 'LIKE', "%{$search}%")
                                ->orWhere('states.stateName', 'LIKE', "%{$search}%")
                                ->orWhere('mobile', 'LIKE', "%{$search}%")
                                ->orWhere('email', 'LIKE', "%{$search}%")
                                ->orWhere('isTestTaken', 'LIKE', "%{$search}%")
                                //->offset($start)
                                //->limit($limit)
                                ->orderBy($order, $dir)
                                ->select('idCandidate','districtName','states.stateName','name','mobile','email','isTestTaken','gender')
                                ->get();
            }else{
                $candidates = DB::table('candidates')
                                ->join('states','candidates.state','=','states.idState')
                                ->join('districts','candidates.district','=','districts.idDistrict')
                                ->where('idCandidate', 'LIKE', "%{$search}%")
                                ->orWhere('name', 'LIKE', "%{$search}%")
                                ->orWhere('gender', 'LIKE', "%{$search}%")
                                ->orWhere('districtName', 'LIKE', "%{$search}%")
                                ->orWhere('states.stateName', 'LIKE', "%{$search}%")
                                ->orWhere('mobile', 'LIKE', "%{$search}%")
                                ->orWhere('email', 'LIKE', "%{$search}%")
                                ->orWhere('isTestTaken', 'LIKE', "%{$search}%")
                                ->offset($start)
                                ->limit($limit)
                                ->orderBy($order, $dir)
                                ->select('idCandidate','districtName','states.stateName','name','mobile','email','isTestTaken','gender')
                                ->get();                
            }
            $filtercandidates = DB::table('candidates')
                                ->join('states','candidates.state','=','states.idState')
                                ->join('districts','candidates.district','=','districts.idDistrict')
                                ->where('idCandidate', 'LIKE', "%{$search}%")
                                ->orWhere('name', 'LIKE', "%{$search}%")
                                ->orWhere('gender', 'LIKE', "%{$search}%")
                                ->orWhere('districtName', 'LIKE', "%{$search}%")
                                ->orWhere('states.stateName', 'LIKE', "%{$search}%")
                                ->orWhere('mobile', 'LIKE', "%{$search}%")
                                ->orWhere('email', 'LIKE', "%{$search}%")
                                ->orWhere('isTestTaken', 'LIKE', "%{$search}%")
                                ->select('idCandidate','districtName','states.stateName','name','mobile','email','isTestTaken','gender')
                                ->count();
        
            $totalFiltered = $filtercandidates;
            
        }
        $data = array();
        if (!empty($candidates)) {
            foreach ($candidates as $candidate) {
                $nestedData['idCandidate'] = $candidate->idCandidate;
                $nestedData['name'] = $candidate->name;
                $nestedData['gender'] = $candidate->gender;
                $nestedData['email'] = $candidate->email;
                $nestedData['mobile'] = $candidate->mobile;
                $nestedData['state'] = $candidate->stateName;
                $nestedData['district'] = $candidate->districtName;
                $nestedData['isTestTaken'] = $candidate->isTestTaken;
                $data[] = $nestedData;
            }
        }
        
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        $candidatelist = json_encode($json_data);
        return $candidatelist;
//        return view('admin.candidates',compact('candidates'));
    }
    
    public function getSuggestion()
    {   
        $suggests = \App\CandidateSuggestion::get();
        return view('admin.suggest',compact('suggests'));
    }
    
    public function getRecommendation()
    {   
        $recommend = \App\CandidateRecommandation::get();
        return view('admin.recommend',compact('recommend'));
    }
    
    public function getEnrolled()
    {   
        $enrolled = \App\CandidateEnrollment::get();
        return view('admin.enrolled',compact('enrolled'));
    }
}
