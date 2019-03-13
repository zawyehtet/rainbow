<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSeat;
use App\Seat;
use App\Hall;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats  = Seat::with('hall')->paginate(5);
        // $seat = Seat::find(1);

        // return $seat->hall->name;
        //return $seats;

        //return $seats->hall->name;
        return view('seat.index',compact('seats'));
        //$seats = Seat::all();
        //return $halls;


       // return view('seat.index',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $halls = Hall::all();
        //return $halls;
        return view('seat.create',compact('halls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeat $request)
    {
        //
       $array = $request->all();
        //return $array;
        Seat::create($array);
        return redirect('/seat');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $seat = Seat::find($id);
        $seat->load('hall');
        //return $seat;
        //return view('/seat',compact('seat'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $seat = Seat::find($id);
        
        $seats = Seat::with('hall')->get();
        
        return view('seat.edit',compact('seats','seat'));
        
        //return $movie;
        //return view("movie.edit",compact("movie"));
        // $seat = Seat::with('hall')->get();
        
        // return view('seat.edit',compact('seat'));
       //$seat = Seat::find($id);
       //return view('seat.edit',compact('halls'));
       //return view('seat.edit',compact('seat'));
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
        //return $seat = Seat::find($id);
        Seat::where('id', '=', $id)->update(
            [
            'hall_id'       =>    $request->hall_id,
            'row'           =>    $request->row,
            'number'        =>    $request->number,
            'price'         =>    $request->price
            ]
        );
        return redirect('/seat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seat = Seat::find($id);
        $seat->delete();
        return redirect('/seat');
    }
}
