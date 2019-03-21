<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table    = 'booking';
    protected $fillable = [
        'showing_id',
        'movie_id',
        'seat_number',
        'price',
        'status',
        'booking_number'
    ];

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
    public function hall()
    {
        return $this->belongsTo('App\Hall');
    }
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }
    public function show()
    {
        return $this->belongsTo('App\Show');
    }
    
}
