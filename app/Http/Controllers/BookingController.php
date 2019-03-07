<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Hall;
use App\Seat;
use App\Show;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $books      =     Booking::paginate(5);
        $bookings   =     Booking::with('show')->get();

       return view('booking.index',compact('bookings','books'));
    }

    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movie = Movie::all();
        $hall = Hall::all();
        $seat  = Seat::all();
        $showings  = Show::all();
        return view('booking.create',compact('hall','movie','seat','showings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookingSeats = $request->booking_seats;
        foreach($bookingSeats as $bs)
        {
           $seat =  Seat::find($bs);
           Booking::create([
               'showing_id' =>$request->showing_id,
               'seat_number'=>$seat->number,
               'price'      =>$seat->price,
               'status'     =>"comfirm"
           ]);
           
        }
        //$array = $request->all();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return 'some show';
        //
        // $booking = Booking::find($id);
        // $booking->load('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
       // return Booking::find($id);
       $booking = Booking::with('seat','show')->find($id);
        
        $shows = Show::all();
        return view('booking.edit',compact('booking','shows'));
        
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
        Booking::where('id', '=', $id)->update(
            [
            'showing_id'      =>  $request->showing_id,
            'seat_number'     =>  $request->seat_number,
            'price'           =>  $request->price,
            'status'          =>  $request->status,
            
            ]
        );
        return redirect('/booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('/booking');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function page()
    {
        // return Hall::all();
        $shows =   Show::with('movie','hall')->get();
        return view('booking.page',compact('shows'));
    }

    public function detail($id)
    {
        $shows =   Show::with('movie','hall')->get();
        
        $show = Show::with('hall.seats')->find($id);
        $seats = $show->hall->seats;

        $bookings =Booking::where('showing_id','=',$id)->pluck('seat_number')->toArray();
        //The pluck method retrieves all of the values for a given key
        return view('booking.detail',compact('shows','show', 'seats','bookings'));
        //return 'this is booking detail';
    }
    public function book(){
        $shows =   Show::with('movie','hall')->get();
        return view('booking.booking',compact('shows'));
    }
}
