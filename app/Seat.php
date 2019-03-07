<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    //
    protected $table    = 'seat';
    protected $fillable = [
        'hall_id',
        'row',
        'number',
        'price'
    ];

    public function hall()
    {
        return $this->belongsTo('App\Hall');
    }
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    
}
