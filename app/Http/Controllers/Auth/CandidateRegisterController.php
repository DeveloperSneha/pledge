<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CandidateRequest;
use App\Http\SendRegistrationApi;
use App\Http\SendLoginApi;
use App\Http\SendSmsApi;
use Auth;
use Session;
use DB;

class CandidateRegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $guard = 'candidate';
    protected $redirectTo = '/candidate';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct() {
    //     $this->middleware('guest');
    // }

    /**
     * Get Registration Form
     *

     */
    public function showRegistrationForm() {
      return view('candidate.register');
    }

    public function register(CandidateRequest $request) {      
      $candidate = new \App\Candidate();
      $candidate->fill($request->all());
      $candidate->password = bcrypt($request->password);
//      DB::beginTransaction();
      $candidate->save();
      //     SMS API Integration START
      $phone_number =$request->mobile;
      $message1 ="Dear ".$request->name.", HSDM सदैव आपकी उन्नति में योगदान देने के लिए इच्छुक है, आशा है की इन 2 टेस्ट्स करने से आपको व्यासविक जीवन में उत्तीर्णता प्राप्त होएगी।  2 टेस्ट्स के रजिस्ट्रेशन के Login ID एवं Password यह हैं.: \n Link: http://www.pledge.hsdm.org.in/clogin \n Username : ".$request->mobile." \n Password : ".$request->password." \n Please keep it with you for further reference";
      SendSmsApi::getUserNumber($phone_number, $message1);
      //     SMS API Integration end
      // flash('Sms has been sent successfully');
      $message = "Candidate successfully registered";
      SendRegistrationApi::sendRegistrationNotification($message, $candidate);
      $saved = \App\Candidate::where('idCandidate','=',$candidate->idCandidate)->first();
      if(!empty($saved->idWheebox)){
//      DB::commit();
        if (Auth::guard('candidate')->attempt(['mobile' => $request->mobile, 'password' => $request->password], $request->remember)) {
            $data = $request->mobile;
            // dd('here');
            // SendLoginApi::sendLoginNotification($data);
            if($request->ajax()) {
            return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
                    }
            // if successful, then redirect to their intended location               
            return redirect('/candidate');
        } 
      }
        $saved->delete();
        return Redirect::back()->withInput(Input::all())->withErrors(['Sorry for the inconvenience! Please Try Again']);
//        
    }
    
    public function sendReg() { 
      $candidate = \App\Candidate::skip(19500)->take(10000)->get();
      $message = "Candidate successfully registered";
      foreach($candidate as $var){      
//          dd($var);
      SendRegistrationApi::sendRegistrationNotification($message, $var);
      }
      return redirect('/');      
    }

    protected function guard() {
        return Auth::guard('candidate');
    }

}
