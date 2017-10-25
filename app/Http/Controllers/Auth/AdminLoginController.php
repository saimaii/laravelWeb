<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:admin',['except' => ['logout']]);
    }

    //function to show admin login form
    public function showLoginForm() {
        return view('auth.admin-login');
    }
    //function to login admins
    public function login(Request $request) {
        //validate the form data
        $this->validate($request,[
            'email' => 'required|username',
            'password' => 'required|min:6'
        ]);
        //attempt to login the admins in
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
            //if successful redirect to admin dashboard
            return redirect()->intended(route('auth.test'));
        }
        //if unsuccessfull redirect back to the login for with form data
        return redirect()->back()->withInput($request->only('username','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
