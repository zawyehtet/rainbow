<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table    = 'show';

    protected $fillable = [
        'movie_id',
        'hall_id',
        'show_time'
    ];
    protected $dates = ['show_time'];
    ///define date mutator

    public function hall()
    {
        return $this->belongsTo('App\Hall');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
    
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

    public function setShowTimeAttribute($value){
        $this->attributes['show_time'] = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $value);
    }
    //changing mutator datetime format witg setShowTimeAttribue before create

}

