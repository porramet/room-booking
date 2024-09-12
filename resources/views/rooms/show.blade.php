<!DOCTYPE html>
<html>
<head>
    <title>{{ $room->name }}</title>
</head>
<body>
    <h1>{{ $room->name }}</h1>
    <p>Capacity: {{ $room->capacity }}</p>
    <p>Equipment: {{ $room->equipment }}</p>
    <!-- Form สำหรับการจอง -->
    @auth
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">
        <input type="date" name="booking_date" required>
        <button type="submit">Book Room</button>
    </form>
    @else
    <p>Please <a href="{{ route('login') }}">login</a> to book a room.</p>
    @endauth
</body>
</html>
