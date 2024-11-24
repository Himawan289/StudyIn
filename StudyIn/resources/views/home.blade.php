<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<header class="header">
    <div class="container">
        <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo">
        <nav class="nav">
            <a href="#">Produk</a>
            <a href="#">Promo</a>
            <a href="#">Testimoni</a>
            <a href="#">E-Library</a>
            <a href="#">Layanan</a>
        </nav>
        <a href="{{ route('login') }}" class="btn-signup">Daftar Sekarang</a>
        </div>
</header>

    <section class="hero">
    <div class="container">
        <h1>Bimbel Online Terbaik, <br> Terlengkap, dan Terbukti di Seluruh Dunia</h1>
        <button class="btn-discount">+62 Dapatkan Diskon</button>
        <div class="program-container">
            <div class="program-buttons">
                <button>Jadwal</button>
                <button>Video Pembelajaran</button>
                <button>Latihan Soal</button>
                <button>Diskusi</button>
                <button>Semua Program</button>
            </div>
        </div>
    </div>
</section>

    <section class="mentors">
        <div class="container">
            <h2>Best <span>Mentors</span></h2>
            <p>Di StudyIn, Kami Berkomitmen Menghadirkan Para Profesor Terbaik untuk Memberikan Kursus-Kursus Berkualitas Unggul.</p>
            <div class="mentor-cards">
                <div class="mentor-card">
                    <img src="{{ asset('img/nadia.png') }}" alt="Mentor 1">
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/erwin.png') }}" alt="Mentor 1">
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/hara.png') }}" alt="Mentor 1">
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/dimas.png') }}" alt="Mentor 1">
                    
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/cello.png') }}" alt="Mentor 2">
                    
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/haqqul.png') }}" alt="Mentor 2">
                    
                </div>
            </div>
            <a href="#" class="btn-all-mentors">Semua Mentor</a>
        </div>
    </section>

    <section class="newsletter">
        <p>Takut ingin ketinggalan promo? Langganan newsletter sekarang!</p>
        <form>
            <input type="email" placeholder="Email Address">
            <button type="submit">Submit</button>
        </form>
    </section>

    <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <h2>Learn Today, <br> Lead Tomorrow</h2>
            </div>
            <div class="footer-links">
                <div>
                    <h3>Kategori</h3>
                    <p>Materi</p>
                    <p>Promo</p>
                    <p>E-Library</p>
                </div>
                <div>
                    <h3>Quick Access</h3>
                    <p>Jadwal</p>
                    <p>Video Pembelajaran</p>
                    <p>Latihan Soal</p>
                    <p>Diskusi</p>
                </div>
            </div>
            <div class="footer-right">
                <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="footer-logo">
                <div class="social-media">
                <div class="social-media">
                  <a href="#">
                      <img src="{{ asset('img/Youtube.png') }}" alt="Youtube Logo" class="social-logo">
                  </a>
                  <a href="#">
                      <img src="{{ asset('img/Tik tok.png') }}" alt="Tiktok Logo" class="social-logo">
                  </a>
                  <a href="#">
                      <img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram Logo" class="social-logo">
                  </a>
</div>
                </div>
            </div>
        </div>
        <p>© 2024 All Rights Reserved.</p>
    </div>
</footer>


</body>
</html>
