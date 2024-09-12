<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์ของคุณ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>โปรไฟล์ของคุณ</h1>

    @if(Auth::check())
        <p>ชื่อผู้ใช้: {{ Auth::user()->name }}</p>
        <p>อีเมล: {{ Auth::user()->email }}</p>
        <p>เบอร์โทร: {{ Auth::user()->phone_number }}</p>
        
        <h2>การจองของคุณ</h2>
        @forelse(Auth::user()->bookings as $booking)
            @if($booking->room)
                <p>ห้องที่จอง: {{ $booking->room->name }}</p>
                <p>วันที่จอง: {{ $booking->booking_date }}</p>
                <p>สถานะ: {{ $booking->status }}</p>
            @else
                <p>ข้อมูลห้องไม่ถูกต้อง</p>
            @endif
        @empty
            <p>คุณยังไม่ได้ทำการจองห้องใดๆ</p>
        @endforelse

        <h2>อัปเดทโปรไฟล์</h2>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <input type="text" name="name" value="{{ Auth::user()->name }}" required>
            <input type="email" name="email" value="{{ Auth::user()->email }}" required>
            <input type="tel" name="phone_number" value="{{ Auth::user()->phone_number }}" required>
            <button type="submit">อัพเดทโปรไฟล์</button>
        </form>
    @else
        <p>กรุณาลงชื่อเข้าสู่ระบบเพื่อดูโปรไฟล์</p>
    @endif
</body>
</html>
