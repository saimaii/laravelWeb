<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ConsoleTVs\Charts\Facades\Charts;

class reportController extends Controller
{


//    public function show($name, $height)
//    {
//        if (in_array($name, $this->protected_charts)) {
//            $this->checkProtected();
//        }
//        return view("charts.$name", ['height' => $height]);
//    }

    public function dailyGraph()
    {
        // $data= DB::table('counting_pass_data')->select('amount_pass')->get();

        $data = DB::table('dailyreport')->get();
        //$data1 = DB::table('dailyreport')->select('amount')->first()->amount;



        $chart = Charts::database($data, 'bar', 'highcharts')
            ->elementLabel("amount")
            ->title('Daily Report')
            ->responsive(false)
            ->groupBy('date')
            ->values($data->pluck('amount'));
            //->lastByDay(3, true);

        return view('report', ['chart' => $chart]);

    }




}
