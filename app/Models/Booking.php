<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   // ใน Booking.php
public function room()
{
    return $this->belongsTo(Room::class);
}

}
