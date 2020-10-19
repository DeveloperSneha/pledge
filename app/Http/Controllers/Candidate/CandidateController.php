<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\GetCandidateTestApi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;

class CandidateController extends Controller
{
    public function __construct() {
        $this->middleware('auth:candidate');
    }

    public function index(Request $request) {
        $candidates = \App\Candidate::where('idCandidate','=',Auth::guard('candidate')->user()->idCandidate)->first();     
        
        return view('candidate.dashboard', compact('candidates'));
    }

    public function showTest(Request $request ,$testName){
        $login = \App\Candidate::where('idCandidate','=',Auth::guard('candidate')->user()->idCandidate)->first();
        if($testName == "BARO VI"){
            GetCandidateTestApi::getTestNotification($testName,$login->email);
            $candidate = \App\Candidate::where('idCandidate','=',Auth::guard('candidate')->user()->idCandidate)->first();
            if(!empty($candidate->testUrl2)){
                return Redirect::to($candidate->testUrl2);
            }
        }else if($testName == "Aspiration Test"){
            GetCandidateTestApi::getTestNotification($testName,$login->email);
            $candidate = \App\Candidate::where('idCandidate','=',Auth::guard('candidate')->user()->idCandidate)->first();
            if(!empty($candidate->testUrl)){
                return Redirect::to($candidate->testUrl);
            }
        }
        else{
            return redirect('candidate');
        }
    }
    
    public function promote(){
        return view('candidate.promote');
    }
}