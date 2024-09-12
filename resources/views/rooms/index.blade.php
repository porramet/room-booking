<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บไซต์ของเรา</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <!-- เมนูนำทาง -->
    <nav id="navmenu">
        <ul>
            <li><a href="#login">เข้าสู่ระบบ</a></li>
            <li><a href="#room-info">ข้อมูลห้อง</a></li>
            <li><a href="#booking">จองห้อง</a></li>
            <li><a href="#profile">โปรไฟล์</a></li>
        </ul>
    </nav>

    <!-- ส่วนการเข้าสู่ระบบ -->
    <section id="login">
        @include('partials.login')
    </section>

    <!-- ส่วนข้อมูลห้อง -->
    <section id="room-info">
        @include('partials.room-info')
    </section>

    <!-- ส่วนการจองห้อง -->
    <section id="booking">
        @include('partials.booking')
    </section>

    <!-- ส่วนข้อมูลโปรไฟล์ผู้ใช้ -->
    <section id="profile">
        @include('partials.profile')
    </section>

    <!-- ปุ่ม scroll-top -->
    <button class="scroll-top">↑</button>
</body>
</html>
