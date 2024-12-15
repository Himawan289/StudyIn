<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/daftarjadwal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
</head>
<body>
    @include('components.navbar')
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

    @include('components.footer')
</body>
</html>