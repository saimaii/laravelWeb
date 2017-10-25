<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class scheduleController extends Controller
{
    public function getDataSchedule()
    {
        $buses = DB::table('buses')->select('bus_id','bus_number')->get();
        $routes = DB::table('routes')->select('route_id','route_number')->get();

        if(count($routes) > 0 && count($buses) > 0){
            return view('scheduling',compact(['buses','routes']));
        }

    }
    public function insertDataSchedule(Request $req)
    {
        $bus_id=$req->input('bus_id');
        $route_id=$req->input('route_id');
        $departure_time=$req->input('departure_time');
        $arrival_time=$req->input('arrival_time');

        $data=array('bus_id'=>$bus_id,'route_id'=>$route_id,'departure_time'=>$departure_time,'arrival_time'=>$arrival_time);

        DB::table('schedules')->insert($data);
        return redirect('scheduling');
    }
    public function displayDataSchedule()
    {
        $schedules['schedules'] = DB::table('schedules')->get();
        if(count($schedules) > 0){
            return view('viewSchedule',$schedules);
        }
    }
}
