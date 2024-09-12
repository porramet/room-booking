<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   // ใน ProfileController.php
    public function index()
    {
    $user = Auth::user();
    $bookings = $user->bookings; // หรือ $user->bookings()->with('room')->get();
    return view('partials.profile', compact('bookings'));
    }


}
