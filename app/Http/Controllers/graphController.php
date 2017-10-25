<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ConsoleTVs\Charts\Facades\Charts;

class graphController extends Controller
{
    public function graph()
    {
        // $data= DB::table('counting_pass_data')->select('amount_pass')->get();

        $data1 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',1)->first()->amount;
        $data2 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',2)->first()->amount;
        $data3 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',3)->first()->amount;
        $data4 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',4)->first()->amount;
        $data5 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',5)->first()->amount;
        $data6 = DB::table('passengerroute')->select('amount')->where('passengerRoute_id',6)->first()->amount;
        // Setup the chart settings
        $chart = Charts::realtime('bar', 'highcharts')

            ->title("Amount of passenger in real time")
            ->dimensions(0, 400) // Width x Height
            ->template("material")
            ->elementLabel("Amount of Passengers")

             ->colors(['#2196F3', '#F44336', '#FFC107','#00c853','#6200ea','#c51162'])

            ->dataset('Route 1',[$data1])
            ->dataset('Route 2' ,[$data2])
            ->dataset('Route 3' ,[$data3])
            ->dataset('Route 4' ,[$data4])
            ->dataset('Route 5' ,[$data5])
            ->dataset('Route 6' ,[$data6])

            // Setup what the values mean
            ->labels(['Route']);
//                 ->labels(['Route2'])
//                 ->labels(['Route3'])
//                 ->labels(['Route4'])
//                 ->labels(['Route5'])
//                 ->labels(['Route6'])



        return view('graph', ['chart' => $chart]);

    }
}
