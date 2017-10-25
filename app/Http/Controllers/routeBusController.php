<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeBusController extends Controller
{
    public function __construct()
{
    $this->middleware('guest');
}

/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function index1()
{
    return view('auth.routeBus');
}
}
