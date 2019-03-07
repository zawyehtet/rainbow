<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Hall;
use App\Seat;
use App\Show;

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
        $movies = Movie::count();
        $halls  = Hall::count();
        $shows = Show::with('movie','hall')->get();
        $movie =  Movie::all();
        return view('/home',compact('shows','movie','movies','halls'));
    }

    public function home()
    {   
        $movie = Movie::all();
        $shows = Show::with('movie','hall')->get();
        return view('/home',compact('shows','movies' ));
    }

    
    
}
