<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\PassengerAccountController;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;





       /**
     * Where to redirect users after login.
     *
     * @var string
     */



    /**
     * Create a new controller instance.
     *
     * @return void
     */


    protected $redirectTo;
   public function authenticated()
   {
        if(auth()->user()->statusId==1)
        {
           return redirect('/passengerAccount');
        }else{
            return redirect('/home');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


//    public function authenticate(Request $request)
//    {
//
//        $username = $request->input('username');
//        $password = $request->input('password');
//        if (auth()->guard('admin')->attempt(['username' => $username, 'password' => $password ]))
//        {
//            return  $redirectTo = '/test';
//
//        }
//        else
//        {
//            return  $redirectTo = '/home';
//        }
//    }
}
