<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\DB;

class ReportdataController extends Controller
{
    public function data()
    {   
    //    return  $users = DB::table('booking')
    //             ->whereDay('created_at', '31')
    //             ->count();
    //     return $users = DB::table('users')
    //             ->whereMonth('created_at', '12')
    //             ->get();
        $price      = DB::table('booking')->sum('price');
        $booking    = DB::table('booking')->count();
        $hall       = DB::table('hall')->count();
        $movie      = DB::table('movie')->count();
    //   return $bookings = DB::table('booking')->whereMonth('created_at','12')->get();
      // return $data = ['users' =>$users,];

        return view('report.data',compact('booking','hall','movie','price'));
    }

    public function generatePDF(){
        $price      = DB::table('booking')->sum('price');
        $booking    = DB::table('booking')->count();
        $hall       = DB::table('hall')->count();
        $movie      = DB::table('movie')->count();
        $data = [
            'movie'     => $movie,
            'booking'   => $booking,
            'hall'      => $hall,
            'price'     => $price,
        ];

        // $data = [$movie=> DB::table('movie')->count()];
        $pdf = PDF::loadView('report.data',$data);
  
        return $pdf->download('itsolutionstuff.pdf');
        // $data = ['title' => 'Welcome to HDTuto.com'];
        // $pdf = PDF::loadView('pdf', $data);
  
        // return $pdf->download('itsolutionstuff.pdf');
    }

}
