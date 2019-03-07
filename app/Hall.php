<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //
    protected $table = 'hall';
    protected $fillable = ['name'];

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }

    public function shows()
    {
        return $this->hasMany('App\Show');
    }
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
}
