<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatisticalDataController extends Controller
{
    public function getCount(){
        $users = DB::select('select * from report');
        return view('statisticalData',['users'=>$users]);
    }
}
