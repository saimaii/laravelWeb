<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data3 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id', '3')->get();

        return view('home', $data3);
    }

    public function subscribe1($id){
        $data['data']=DB::update('update users set subscribeRoute1 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification1 = "Rote 1 is nearly full" where id = ?',[$id]);

        return redirect('/home');
    }

    public function subscribe2($id){
        $data['data']=DB::update('update users set subscribeRoute2 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification2 = "Rote 2 is nearly full" where id = ?',[$id]);


        return redirect('/home');
    }

    public function subscribe3($id){
        $data['data']=DB::update('update users set subscribeRoute3 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification3 = "Rote 3 is nearly full" where id = ?',[$id]);


        return redirect('/home');
    }

    public function subscribe4($id){
        $data['data']=DB::update('update users set subscribeRoute4 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification4 = "Rote 4 is nearly full" where id = ?',[$id]);


        return redirect('/home');
    }
    public function subscribe5($id){
        $data['data']=DB::update('update users set subscribeRoute5 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification5 = "Rote 5 is nearly full" where id = ?',[$id]);


        return redirect('/home');
    }
    public function subscribe6($id){
        $data['data']=DB::update('update users set subscribeRoute6 = 1 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification6 = "Rote 6 is nearly full" where id = ?',[$id]);

        return redirect('/home');
    }
    public function unSubscribe1($id){
        $data['data']=DB::update('update users set subscribeRoute1 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification1 = 0 where id = ?',[$id]);
        return redirect('/home');

    }
    public function unSubscribe2($id){
        $data['data']=DB::update('update users set subscribeRoute2 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification2 = 0 where id = ?',[$id]);
        return redirect('/home');

    }
    public function unSubscribe3($id){
        $data['data']=DB::update('update users set subscribeRoute3 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification3 = 0 where id = ?',[$id]);
        return redirect('/home');

    }
    public function unSubscribe4($id){
        $data['data']=DB::update('update users set subscribeRoute4 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification4 = 0 where id = ?',[$id]);
        return redirect('/home');

    }
    public function unSubscribe5($id){
        $data['data']=DB::update('update users set subscribeRoute5 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification5 = 0 where id = ?',[$id]);
        return redirect('/home');

    }
    public function unSubscribe6($id){
        $data['data']=DB::update('update users set subscribeRoute6 = 0 where id = ?',[$id]);
        $data['data']=DB::update('update users set notification6 = 0 where id = ?',[$id]);
        return redirect('/home');

    }








}
