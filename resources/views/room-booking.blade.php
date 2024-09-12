<!DOCTYPE html>
<html>
<head>
    <title>Book Room</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Book Room</h1>
        <p>Choose a room and book it for the desired date.</p>
        <!-- Room selection and booking form -->
        @foreach($rooms as $room)
        <div>
            <h2>{{ $room->name }}</h2>
            <p>Capacity: {{ $room->capacity }}</p>
            <p>Equipment: {{ $room->equipment }}</p>
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <input type="date" name="booking_date" required>
                <button type="submit">Book Room</button>
            </form>
        </div>
        @endforeach
    </div>
</body>
</html>
