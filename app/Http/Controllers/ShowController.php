<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreShowing;
use App\Show;
use App\Hall;
use App\Movie;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return Show::all();
        //$shows = Show::paginate(5);
        $showingMovies =   Show::with('movie','hall')->paginate(3);
        // $showingMovies =   Show::get();
        //*****************call belongto function from show model for relationship ********/
        return view('show.index',compact('showingMovies'));
        //return view('show.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $movies = Movie::all();
        //return Hall::all();
        $halls  = Hall::all();
        //return $halls;
        return view('show.create',compact('halls','movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowing $request)
    {
        //
        $array = $request->all();
        //return $array;
        Show::create($array);
        return redirect('/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Show::find($id);
        $show->load('hall','movie');
        //hasmany relation //call function hall and movie from show model and load 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Show::with('hall', 'movie')->find($id);
        // $show->load('hall', 'movie');
        //return $show;
        // $shows = Show::with('hall','movie')->get();
        $halls = Hall::all();
        $movies = Movie::all();
        //return $shows;
        return view('show.edit',compact('show','movies', 'halls'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Show::where('id', '=', $id)->update(
            [
            'movie_id'      =>    $request->movie_id,
            'hall_id'       =>    $request->hall_id,
            'show_time'     => $request->show_time,
            ]
        );
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show= Show::find($id);
        $show->delete();
        return redirect('/show');
    }
    public function booking()
    {
        return "bookig";
    }
}
