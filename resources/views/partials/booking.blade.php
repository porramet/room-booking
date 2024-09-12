<h2>การจองห้อง</h2>
<!-- ถ้าผู้ใช้เข้าสู่ระบบแล้ว -->
@if (Auth::check())
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="number" name="room_id" placeholder="Room ID" required>
        <input type="date" name="booking_date" required>
        <button type="submit">จองห้อง</button>
    </form>
@else
    <p>กรุณาลงชื่อเข้าสู่ระบบก่อนทำการจองห้อง</p>
@endif
