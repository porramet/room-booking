<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
{
    // ดึงข้อมูลการจองทั้งหมด
    $bookings = Booking::all();

    // ส่งข้อมูลไปยังวิว
    return view('path.to.view', compact('bookings'));
}
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'booking_date' => 'required|date',
        ]);

        $booking = new Booking();
        $booking->user_id = auth()->id(); // ใช้ auth()->id() สำหรับผู้ใช้ที่เข้าสู่ระบบ
        $booking->room_id = $request->input('room_id');
        $booking->booking_date = $request->input('booking_date');
        $booking->status = 'รอการอนุมัติ'; // สถานะเริ่มต้น
        $booking->save();

        return redirect()->route('rooms.index')->with('success', 'Room booked successfully!');
    }
}
