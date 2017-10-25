<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ConsoleTVs\Charts\Facades\Charts;

class MonthController extends Controller
{
    public function monthlyGraph()
    {
        // $data= DB::table('counting_pass_data')->select('amount_pass')->get();

        $data = DB::table('dailyreport')->get();
        //$data1 = DB::table('dailyreport')->select('amount')->first()->amount;



        $chart = Charts::database($data, 'bar', 'highcharts')
            ->elementLabel("amount")
            ->title('Monthly Report')
            ->responsive(false)
            ->groupByMonth()
            ->values($data->pluck('amount'));
        //->lastByDay(3, true);

        return view('month', ['chart' => $chart]);

    }
}
