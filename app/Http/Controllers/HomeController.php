<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::all(); // ดึงข้อมูลห้องจากฐานข้อมูล
        return view('rooms.index', compact('rooms'));
    }
}
