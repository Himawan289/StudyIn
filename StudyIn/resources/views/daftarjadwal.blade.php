<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/daftarjadwal.css') }}">
</head>
<body>
    @include('components.navbar')
    {{-- <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo">
        </div>
        <div class="nav-links">
            <div>HOME</div>
            <div>MATERI</div>
            <div>JADWAL</div>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Belajar apa hari ini?" class="search-bar">
            <img src="{{ asset('img/dimas.png') }}" alt="User Avatar">
        </div>
    </nav> --}}
    <div class="container">
        <div class="date-select">
            <select>
                <option>Pilih tanggal</option>
                <option>25 November 2024</option>
                <option>26 November 2024</option>
            </select>
        </div>

        <div class="material-section">
            <div class="material-header">
                <h2 class="material-title">Pilih materi</h2>
                <div class="search-box">
                    <input type="text" placeholder="Cari Materi">
                </div>
            </div>

            <div class="material-list">
                <div class="material-item">
                    <input type="checkbox"> Materi 1
                </div>
                <div class="material-item">
                    <input type="checkbox"> Materi 2
                </div>
                <div class="material-item">
                    <input type="checkbox"> Materi 3
                </div>
            </div>
        </div>

        <button class="save-button">Simpan</button>
    </div>

    <footer>
        &copy; 2024 StudyIn. All rights reserved.
    </footer>
</body>
</html>