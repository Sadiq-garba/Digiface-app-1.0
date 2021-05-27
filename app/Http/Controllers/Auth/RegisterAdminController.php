<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterAdminController extends Controller

{



    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


   

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
     * 
     */
     public function showReg(){

       return view('auth.admin_register');


     }

   /* protected function validator(Request $request)
    {
        return Validator::make($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
  /*  protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'username' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }*/
protected function createAdmin(Request $request){
    $this->validate($request, [
        'username'=>'required|string|max:255',
        'email'=>'required|string|email|max:255|unique:admins',
        'password'=>'required|string|min:8|confirmed'
     ]);
   
   $newAdmin = new Admin;
   
   $newAdmin->username  =     $request->input('username');
   $newAdmin->email     =     $request->input('email');
   $newAdmin->password  =     Hash::make($request->input('password'));

   $newAdmin->save();
   return redirect()->intended('admin/login')->with('success',' You\'ve registered successfuly. Login to continue');

}


}
