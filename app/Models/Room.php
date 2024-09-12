<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // app/Models/Room.php
public function bookings()
{
    return $this->hasMany(Booking::class);
}

}
