<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Auth;

class AdminLoginController extends Controller {

    protected $redirectTo = '/admin';

    public function __construct() {
//        $this->middleware('guest:web')->except('logout');
    }

    public function showLoginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Enter Your Email.',
            'password.required' => 'Enter Your Password.'
        ];
        $this->validate($request, $rules, $messages);
        // Attempt to log the candidate in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            // exit();
            return redirect('/admin');
        }
        return Redirect::back()->withInput($request->only('email'))->withErrors(['msg' => 'Your Credential Doesnot Match.Please Try Again !!']);
        
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();

        //$request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();
         // return redirect('/alogin');
        return redirect()->guest(route('admin.login'));
    }

    protected function guard() {
        return Auth::guard('web');
    }

}
