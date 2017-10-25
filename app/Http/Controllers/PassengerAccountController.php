<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class passengerAccountController extends Controller
{
    public function getData()
    {
       $data['data'] = DB::table('users')->get();
       if(count($data) > 0){
            return view('passengerAccount',$data);
       }else{
           return view('passengerAccount');
       }
    }

    public function destroy($id){
         DB::delete('delete from users where id = ?',[$id]);
        return redirect('/passengerAccount');
    }

//        public function delete($id){
//        DB::table('users')-> where(id,$id)->delete();
//        return redirect('/passengerAccount');
//
//        }

    public function show($id) {
        $data = DB::select('select * from users where id = ?',[$id]);
        return view('passengerUpdata',['data'=>$data]);
    }

    public function edit(Request $request,$id) {
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        DB::update('update users set name = ? where id = ?',[$name,$id]);
        DB::update('update users set lastname = ? where id = ?',[$lastname,$id]);
        echo "Record updated successfully.<br/>";
        return redirect('/passengerAccount');
    }
}
