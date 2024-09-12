<?php
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


Route::get('/', [RoomController::class, 'index'])->name('home');
// เส้นทางสำหรับหน้าห้อง
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('rooms.show');

// เส้นทางสำหรับการจอง
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// เส้นทางสำหรับข้อมูลโปรไฟล์
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// web.php
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// เส้นทางสำหรับหน้าเข้าสู่ระบบ
Route::get('/login', function() {
    return view('auth.login');
})->name('login');

// เส้นทางสำหรับหน้า注册
Route::get('/register', function() {
    return view('auth.register');
})->name('register');

// เส้นทางสำหรับคู่มือการใช้งาน
Route::get('/usage-guide', function() {
    return view('usage-guide');
})->name('usage-guide');

// เส้นทางสำหรับปฏิทิน
Route::get('/calendar', function() {
    return view('calendar');
})->name('calendar');

// เส้นทางสำหรับหน้าหลัก
Route::get('/', [HomeController::class, 'index'])->name('home');
