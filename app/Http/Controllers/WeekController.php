<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use ConsoleTVs\Charts\Facades\Charts;


class WeekController extends Controller
{
    public function weeklyGraph()
    {
        // $data= DB::table('counting_pass_data')->select('amount_pass')->get();

        $data = DB::table('weeklyreport')->get();

        $chart = Charts::database($data, 'bar', 'highcharts')
            ->elementLabel("amount")
            ->title('Weekly Report')
            ->responsive(false)
            ->groupBy('week')
            ->values($data->pluck('amount'));
        //->lastByDay(3, true);

        return view('week', ['chart' => $chart]);

    }
}
