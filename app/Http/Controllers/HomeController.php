<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Hall;
use App\Seat;
use App\Show;
use App\User;
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
        $movie_count = Movie::count();
        $halls  = Hall::count();
        $shows = Show::with('movie','hall')->get();
        $movie =  Movie::all();

        // monthly booking for charts
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

        //most booking movie
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

        //end of movie chart function
        
        return view('/home',compact('shows','movie','movie_count','halls','bookings','values','movies','counts'));
    }

    public function home()
    {   
        $movie = Movie::all();
        $shows = Show::with('movie','hall')->get();
        return view('/home',compact('shows','movies' ));
    }

   

    
    
}
