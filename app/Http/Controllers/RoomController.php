<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // ดึงข้อมูลห้องจากฐานข้อมูล
        return view('rooms.index', compact('rooms')); // ส่งข้อมูลไปยัง view
    }
}
