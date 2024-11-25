<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/jadwalkosong.css') }}">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo">
        </div>
        <div class="nav-links">
            <a href="/">HOME</a>
            <a href="/coursesLock">MATERI</a>
            <a href="/jadwalKosong">JADWAL</a>
        </div>
        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Belajar apa hari ini?">
            <img src="{{ asset('img/dimas.png') }}" alt="Profile" class="profile-pic">
        </div>
    </nav>
    <main class="content">
        <div class="exclamation-container">
            <div class="exclamation-marks">
                <div class="exclamation"></div>
                <div class="exclamation"></div>
                <div class="exclamation"></div>
            </div>
        </div>
        <p class="message">Upss, Jadwal belajar kamu tidak ditemukan nih.</p>
        <p class="message">Ayo buat dan <a href="/jadwalBelajar" class="link">tambah jadwal belajarmu!</a></p>
    </main>
</body>