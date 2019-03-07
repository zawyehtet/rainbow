<?php

namespace App;
use Storage;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movie';

    protected $fillable = [
        'image',
        'status',
        'title',
        'duration'
    ];
    public function shows()
    {
        return $this->hasMany('App\Show');
    }
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
    // public function getImageAttribute($value){ 
    //     return Storage::url($value);
    // }
 
}
