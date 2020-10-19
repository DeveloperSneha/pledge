<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;

class CandidateLoginController extends Controller {

    protected $redirectTo = '/candidate';

    public function __construct() {
        $this->middleware('guest:candidate')->except('logout');
    }

    public function showLoginForm() {
        return view('candidate.login');
    }

    public function login(Request $request) {

        $rules = [
            'mobile' => 'required|exists:candidates',
            'password' => 'required'
        ];
        $messages = [
            'mobile.required' => 'Enter Your mobile.',
            'password.required' => 'Enter Your Password.'
        ];
        $this->validate($request, $rules, $messages);
        
         // Attempt to log the candidate in
        if (Auth::guard('candidate')->attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            // exit();
            return redirect('/candidate');
        }
        return Redirect::back()->withInput($request->only('mobile'))->withErrors(['msg' => 'Your Credential Doesnot Match.Please Try Again !!']);
        
    }

    public function logout(Request $request) {
        Auth::guard('candidate')->logout();

        //$request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();
         // return redirect('/clogin');
        return redirect()->guest(route('candidate.login'));
    }

    protected function guard() {
        return Auth::guard('candidate');
    }

}
