<?php

namespace App;
use App\Booking;


use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];
    public function booking (){
        return $this->belongsTo(Booking::class);
    }
}
