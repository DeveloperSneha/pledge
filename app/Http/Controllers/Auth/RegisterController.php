<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
        ]);
    }
    public function showRegistrationForm() {
      return view('auth.register');
    }

    public function register($request) {      
      $user = new \App\User();
      $user->fill($request->all());
//      DB::beginTransaction();
      $user->save();
      //     SMS API Integration START
      //SendSmsApi::getUserNumber($phone_number, $message1);
      //     SMS API Integration end
      // flash('Sms has been sent successfully');
//      $message = "Candidate successfully registered";
      //SendRegistrationApi::sendRegistrationNotification($message, $candidate);
      
//      DB::commit();
//      if (Auth::guard('candidate')->attempt(['mobile' => $request->mobile, 'password' => $request->password], $request->remember)) {
//            $data = $request->mobile;
            // dd('here');
            // SendLoginApi::sendLoginNotification($data);
            if ($request->ajax()) {
            return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
                    }
            // if successful, then redirect to their intended location   
//            if(empty($candidate->idWheebox)){
//                return redirect('/promote');
//            }
            return redirect('/');      
    }

    protected function guard() {
        return Auth::guard('candidate');
    }
}
