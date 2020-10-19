<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Candidate\CandidateController;
use Auth;
use DB;

class EnrollmentController extends CandidateController {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
//        dd($request->all());
        $schemes = \App\Scheme::orderBy('schemeName')->get()->pluck('schemeName','idScheme')->toArray();
        $sectors = \App\Sector::orderBy('sectorName')->get()->pluck('sectorName','idSector')->toArray();
        $districts = \App\District::where('idState', '=', '6')->get()->pluck('districtName', 'idDistrict')->toArray();
        $companies = DB::table('training_partner')
                ->join('schemes','training_partner.idScheme','=','schemes.idScheme')
                ->join('sector','training_partner.idSector','=','sector.idSector')
                ->join('jobrole','training_partner.idJobRole','=','jobrole.idJobRole')
                ->join('districts','training_partner.idDistrict','=','districts.idDistrict')
                ->select('schemeName','sectorName','districtName','jobRoleName','training_partner.idScheme', 'training_partner.idSector', 'training_partner.idJobRole', 'trainingPartner', 'training_partner.idDistrict', 'address', 'centerName', 'contactNo', 'email');
        if($request->idScheme != null && $request->idDistrict != null && $request->idSector != null && $request->idJobRole != null ){
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idSector', '=',$request->idSector)
                    ->where('training_partner.idJobRole', '=',$request->idJobRole)
                    ->where('training_partner.idScheme', '=', $request->idScheme)
                    ->where('training_partner.idDistrict', '=',$request->idDistrict)
                    ->get();    
        }
        else if(($request->idScheme != null) && ($request->idDistrict != null) && ($request->idSector != null) && ($request->idJobRole == null)){
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idSector', '=',$request->idSector)
                    ->where('training_partner.idScheme', '=', $request->idScheme)
                    ->where('training_partner.idDistrict', '=',$request->idDistrict)
                    ->get();    
        }
        else if(($request->idScheme != null) && ($request->idDistrict != null) && ($request->idSector == null)){
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idScheme', '=', $request->idScheme)
                    ->where('training_partner.idDistrict', '=',$request->idDistrict)
                    ->get();    
        }
        else if(($request->idScheme == null) && ($request->idDistrict != null) && ($request->idSector != null) && ($request->idJobRole != null )){
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idSector', '=',$request->idSector)
                    ->where('training_partner.idJobRole', '=',$request->idJobRole)
                    ->where('training_partner.idDistrict', '=',$request->idDistrict)
                    ->get();    
        }
        else if(($request->idScheme != null) && ($request->idDistrict != null) && ($request->idSector != null) && ($request->idJobRole == null)){
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idSector', '=',$request->idSector)
                    ->where('training_partner.idScheme', '=', $request->idScheme)
                    ->where('training_partner.idDistrict', '=',$request->idDistrict)
                    ->get();    
        }
        else if ($request->has('idDistrict') && $request->idDistrict != null) {
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idDistrict', '=',$request->idDistrict)->get();
        } elseif ($request->has('idSector') && $request->idSector != null && $request->has('idJobRole') && $request->idJobRole != null) {
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idJobRole', '=',$request->idJobRole)->get();
        } elseif ($request->has('idSector') && $request->idSector != null) {
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idSector', '=',$request->idSector)->get();
        } elseif ($request->has('idScheme') && $request->idScheme != null) {
            $enroll = new \App\CandidateEnrollment();
            $enroll->fill($request->all());
            $enroll->idCandidate = Auth::guard('candidate')->user()->idCandidate;
            $enroll->save();
            $companies = $companies->where('training_partner.idScheme', '=', $request->idScheme)->get();
        } else {
            $companies = [];
        }
            return view('candidate.enrollment', compact('schemes', 'districts', 'companies','sectors'));
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function getSectors($id) {
        $sectors = \App\Sector::where('schemeName', 'like', "%{$id}%")->get()->pluck('sectorName', 'idSector')->toArray();
        return json_encode($sectors);
    }

    public function getJobRole($id) {
        $jobrole = \App\JobRole::where('idSector', '=',$id)->pluck('jobRoleName', 'idJobRole')->toArray();
        return json_encode($jobrole);
    }

}
