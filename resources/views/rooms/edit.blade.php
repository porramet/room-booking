<!DOCTYPE html>
<html>
<head>
    <title>Edit Room</title>
</head>
<body>
    <h1>Edit Room</h1>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Room Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $room->name) }}" required>
        <br>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" value="{{ old('capacity', $room->capacity) }}" required>
        <br>

        <label for="equipment">Equipment:</label>
        <input type="text" id="equipment" name="equipment" value="{{ old('equipment', $room->equipment) }}">
        <br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ old('location', $room->location) }}">
        <br>

        <button type="submit">Update Room</button>
    </form>

    <a href="{{ route('rooms.index') }}">Back to Room List</a>
</body>
</html>
