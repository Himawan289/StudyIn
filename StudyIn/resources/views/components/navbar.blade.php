<div class="navbar">
    <!-- Logo -->
    <div class="navbar-logo">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo-icon">
        </a>
    </div>

    <!-- Menu Navigasi -->
    <ul class="navbar-menu">
        <li><a href="{{ url('/dashboardg') }}">Home</a></li>
        <li><a href="{{ url('/coursesLock') }}">Materi</a></li>
        <li><a href="{{ url('/jadwalKosong') }}">Jadwal</a></li>
    </ul>

    <!-- Search Bar -->
    <div class="navbar-search">
        <input type="text" placeholder="Belajar apa hari ini?" />
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>

    <!-- Profil Pengguna -->
    <div class="navbar-profile">
        <img src="{{ asset('img/dimas.jpeg') }}" alt="Profil" class="profile-icon">
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
