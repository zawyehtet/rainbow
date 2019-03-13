<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Hall;
use App\Seat;
use App\Show;
use DB;
use Carbon\Carbon;
//models
use App\Booking;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $bookings=Booking::count();
        $movies = Movie::count();
        $halls  = Hall::count();
        $shows = Show::with('movie','hall')->get();
        $movie =  Movie::all();

        //for charts
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
        

        return view('/home',compact('shows','movie','movies','halls','bookings','values'));
    }

    public function home()
    {   
        $movie = Movie::all();
        $shows = Show::with('movie','hall')->get();
        return view('/home',compact('shows','movies' ));
    }

    
    
}
