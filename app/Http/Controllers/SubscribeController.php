<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class subscribeController extends Controller
{
    public function notification()

    {
        $data1 = DB::select('select amount from passengerroute where route=1');
        $data2 = DB::select('select amount from passengerroute where route=2');
        $data3 = DB::select('select amount from passengerroute where route=3');
        $data4 = DB::select('select amount from passengerroute where route=4');
        $data5 = DB::select('select amount from passengerroute where route=5');
        $data6 = DB::select('select amount from passengerroute where route=6');

        if (Auth::user()->subscribe1 == true) {
            if ($data1 > 9) {
                return ( Auth::user()->notification1);
            }

        } elseif (Auth::user()->subscribe2 == true) {
            if ($data2 > 9) {
                return (Auth::user()->notification2);
            }

        } elseif (Auth::user()->subscribe3 == true) {
            if ($data3 > 9) {
                return (Auth::user()->notification3);
            }

        } elseif (Auth::user()->subscribe4 == true) {
            if ($data4 > 9) {
                return (Auth::user()->notification4);
            }
        }

        elseif (Auth::user()->subscribe5 == true) {
            if ($data5 > 9) {
                return (Auth::user()->notification5);
            }
        }

        elseif (Auth::user()->subscribe6 == true) {
            if ($data6 > 9) {
                return (Auth::user()->notification6);
            }
        }

    }

}
