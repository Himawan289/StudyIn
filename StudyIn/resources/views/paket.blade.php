@php
    $pakets = [
        [
            'packageImg' => 'img/image.png',
            'packageTitle' => 'Paket Mingguan',
            'packageDescription' => 'Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys of the printing ',
            'packageDuration' => '1 Minggu',
            'packagePrice' => 'Rp50.000',
        ],
        [
            'packageImg' => 'img/image.png',
            'packageTitle' => 'Paket Bulanan',
            'packageDescription' => 'Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys of the printing ',
            'packageDuration' => "1 bulan",
            'packagePrice' => 'Rp150.000',
        ],
        [
            'packageImg' => 'img/image.png',
            'packageTitle' => 'Paket Tahunan',
            'packageDescription' => 'Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys of the printing ',
            'packageDuration' => "1 Tahun",
            'packagePrice' => 'Rp500.000',
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/paket.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    @include('components.navbar')
    <main style="min-height: 100vh; padding: 6rem 0;">
        <h1 class="title" style="text-align: center;margin-bottom: 1rem;"> PAKET BELAJAR</h1>
        <div
            style="width: 83.333333%; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            @foreach ($pakets as $paket)
                @include('components.paket-card', [
                    'packageImg' => $paket['packageImg'],
                    'packageTitle' => $paket['packageTitle'],
                    'packageDescription' => $paket['packageDescription'],
                    'packageDuration' => $paket['packageDuration'],
                    'packagePrice' => $paket['packagePrice'],
                ])
            @endforeach
        </div>
        <div style="display: flex; justify-content: center; align-items: center; gap: 1rem; padding: 2rem;">
            <!-- Tombol Sebelumnya -->
            <button
                style="width: 50px; height: 50px; background-color: #3498db; color: white; border: none; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; cursor: pointer;">
                &lt;
            </button>

            <!-- Tombol Halaman 1 -->
            <button
                style="width: 50px; height: 50px; background-color: #3498db; color: white; border: none; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; cursor: pointer;">
                1
            </button>

            <!-- Tombol Halaman 2 -->
            <button
                style="width: 50px; height: 50px; background-color: #3498db; color: white; border: none; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; cursor: pointer;">
                2
            </button>

            <!-- Tombol Halaman 3 -->
            <button
                style="width: 50px; height: 50px; background-color: #3498db; color: white; border: none; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; cursor: pointer;">
                3
            </button>

            <!-- Tombol Berikutnya -->
            <button
                style="width: 50px; height: 50px; background-color: #3498db; color: white; border: none; border-radius: 8px; display: flex; justify-content: center; align-items: center; font-size: 1.5rem; cursor: pointer;">
                &gt;
            </button>
        </div>


    </main>


    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo">
                <h2>Learn Today<br>Lead Tomorrow</h2>
                <div class="social-links">
                    <a href="#"><img src="{{ asset('img/Youtube.png') }}" alt="YouTube"></a>
                    <a href="#"><img src="{{ asset('img/Tik tok.png') }}" alt="TikTok"></a>
                    <a href="#"><img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram"></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>KATEGORI</h3>
                <ul class="footer-links">
                    <li><a href="/coursesLock">Materi</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">E-Library</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>QUICK ACCESS</h3>
                <ul class="footer-links">
                    <li><a href="#">Video Pembelajaran</a></li>
                    <li><a href="#">Latihan Soal</a></li>
                    <li><a href="#">Diskusi</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <img src="{{ asset('img/logo.png') }}" alt="StudyIn" style="max-width: 150px;">
            </div>
        </div>
        <div class="copyright">
            © 2024. All Rights Reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>

</body>

</html>
