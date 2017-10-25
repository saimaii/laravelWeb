<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ConsoleTVs\Charts\Facades\Charts;

class YearController extends Controller
{
    public function yearlyGraph()
    {
        // $data= DB::table('counting_pass_data')->select('amount_pass')->get();

        $data = DB::table('dailyreport')->get();
        //$data1 = DB::table('dailyreport')->select('amount')->first()->amount;



        $chart = Charts::database($data, 'bar', 'highcharts')
            ->elementLabel("amount")
            ->title('Yearly Report')
            ->responsive(false)
            ->groupByYear()
            ->values($data->pluck('amount'));
        //->lastByDay(3, true);

        return view('year', ['chart' => $chart]);

    }
}
