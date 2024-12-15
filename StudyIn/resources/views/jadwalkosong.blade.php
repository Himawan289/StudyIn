<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/jadwalkosong.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
</head>
<body>
    @include('components.navbar')
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

    @include('components.footer')
</body>
