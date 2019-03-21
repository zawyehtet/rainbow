<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
//models
use App\Booking;

class ReportController extends Controller
{
    public function monthly()
    {
        $model = new Booking();
        $report = DB::table('booking')
                ->whereYear('created_at', 2019)
                ->select(
                    DB::raw('count(id) as `total`'),
                    DB::raw('YEAR(created_at) year, MONTH(created_at) month')
                )
                ->groupby('year','month')
                // ->get()
                ->pluck('total', 'month')
                ->toArray();
        //select count(id) as `total`, YEAR(created_at) year, MONTH(created_at) month from `booking` group by `year`, `month`
        $values = array();
        for ($i=0; $i < 12; $i++) { 
            $rep = $i+1;
            $values[$i] = isset($report[$rep])?$report[$rep]:0;
        }
        
        //return $values;
        //mothly movie function
       // $model = new Booking();
        $movie_booking = $model
            ->select(
                'movie_id',
                DB::raw('count(booking_number) as `total_booking`')
            )
            ->groupby('movie_id')
            ->get();

        $movie_booking->load('movie');
        $movies = [];
        $counts = [];
        foreach($movie_booking as $mb){
            $movies[] = $mb->movie->title;
            $counts[] = $mb->total_booking;
        }
        
        // return $movies; 
        return view('report.monthly-chart', compact('values','movies','counts'));
    
    }
}
