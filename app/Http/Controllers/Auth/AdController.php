<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {

        return view('test');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
