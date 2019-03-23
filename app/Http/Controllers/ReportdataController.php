<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Booking;
use App\Movie;

class ReportdataController extends Controller
{
    public function data()
    {   
   
        $price      = DB::table('booking')->sum('price');
        $booking    = DB::table('booking')->count();
        $hall       = DB::table('hall')->count();
        $movie      = DB::table('movie')->count();
    //   return $bookings = DB::table('booking')->whereMonth('created_at','12')->get();
      // return $data = ['users' =>$users,];

        return view('report.data',compact('booking','hall','movie','price'));
    }

    public function generatePDF(){
        $movie_id = DB::table('booking')
                ->select(
                    'movie_id',
                    DB::raw('sum(price) as `total_price`')
                )
                ->groupby('movie_id')
                ->get();
        $price      = DB::table('booking')->sum('price');
        $booking    = DB::table('booking')->count();
        $hall       = DB::table('hall')->count();
        $movie      = DB::table('movie')->count();
        $movies     = Movie::all();
        $data = [
            'movie'     => $movie,
            'booking'   => $booking,
            'hall'      => $hall,
            'price'     => $price,
            'movie_id'=>$movie_id,
            'movies' =>$movies,
        ];

        // $data =0,0,720,1440 [$movie=> DB::table('movie')->count()];
        $customPaper = array(0,0,567.00,283.80);
        //$pdf = PDF::loadView('pdf.retourlabel', compact('retour','barcode'))->setPaper($customPaper, 'landscape');
        $pdf = PDF::loadView('report.voucher',$data)->setPaper($customPaper, 'landscape');
  
        return $pdf->download('wap30.pdf');
        
    }
    public function voucher()
    {
        //return Booking::all();
        $price      = DB::table('booking')->sum('price');
        $movies= Movie::all();
        $movie_id = DB::table('booking')
                ->select(
                    'movie_id',
                    DB::raw('sum(price) as `total_price`')
                )
                ->groupby('movie_id')
                ->get();
     //return   $movie_id->total_price;
        //get all same booking_number group by
        // $books = Booking::paginate(5);
        //return $bookings = Booking::with('show')->groupBy('booking_number')->get();
    
        return view('report.voucher',compact('movie_id','movies','price'));
    }
    

}
