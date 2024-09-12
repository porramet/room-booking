<h2>ข้อมูลห้อง</h2>
<ul>
    @foreach ($rooms as $room)
        <li>
            <h3>{{ $room->name }}</h3>
            <p>Capacity: {{ $room->capacity }}</p>
            <p>Equipment: {{ $room->equipment }}</p>
            <!-- เพิ่มข้อมูลอื่น ๆ ตามที่คุณต้องการแสดง -->
        </li>
    @endforeach
</ul>
