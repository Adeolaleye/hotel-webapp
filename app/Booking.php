<?php

namespace App;
use App\Room;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function room (){
        return $this->hasMany(Room::class,'id');
    }
}
