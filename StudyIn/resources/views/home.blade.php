<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<<<<<<< HEAD
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
        <a href="{{ route('register') }}" class="btn-signup">Daftar Sekarang</a>
    </div>
</header>
=======
<nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" />
        </div>
        <div class="nav-links">
            <a href="#produk">PRODUK</a>
            <a href="#promo">PROMO</a>
            <a href="#testimoni">TESTIMONI</a>
            <a href="#library">E-LIBRARY</a>
            <a href="#layanan">LAYANAN</a>
        </div>
        <a href="#daftar" class="register-btn">DAFTAR SEKARANG</a>
    </nav>
>>>>>>> 801a9280216ad96a73a02d48d63dae0c03be4c6e

    <section class="hero">
        <h1>Bimbel Online Terbaik,<br>Terlengkap, dan Terbukti di Seluruh Dunia</h1>
        <div class="phone-input">
            <input type="text" placeholder="+62" /> 
            <button>Dapatkan Diskon</button>
        </div>
    </section>

    <div class="features">
        <div class="feature-item">
            <img src="{{ asset('img/Books.png') }}" alt="Jadwal icon" />
            <span>Jadwal</span>
        </div>
        <div class="feature-item">
            <img src="{{ asset('img/Video.png') }}" alt="Video icon" />
            <span>Video Pembelajaran</span>
        </div>
        <div class="feature-item">
            <img src="{{ asset('img/Vector.png') }}" alt="Latihan icon" />
            <span>Latihan Soal</span>
        </div>
        <div class="feature-item">
            <img src="{{ asset('img/Question.png') }}" alt="Diskusi icon" />
            <span>Diskusi</span>
        </div>
        <div class="feature-item">
            <img src="{{ asset('img/Menu.png') }}" alt="Program icon" />
            <span>Semua Program</span>
        </div>
    </div>

    <section class="mentors">
        <div class="mentors-content">
            <div class="mentors-left">
                <img src="{{ asset('img/best Mentors.png') }}" alt="Best Mentors" />
                <p class="mentors-text">Di StudyIn, Kami Berkomitmen Menghadirkan Para Profesor Terbaik untuk Memberikan Kursus-Kursus Berkualitas Unggul.</p>
                <a href="#" class="see-all-btn">Semua Mentor</a>
            </div>
            
            <div class="mentors-grid">
                <div class="mentor-card">
                    <img src="{{ asset('img/nadia.png') }}" alt="Nadia" />
                    <div class="mentor-info">
                        <h3>Nadia</h3>
                        <p>Matematika</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/erwin.png') }}" alt="Erwin" />
                    <div class="mentor-info">
                        <h3>Erwin</h3>
                        <p>Fisika</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/hara.png') }}" alt="Hara" />
                    <div class="mentor-info">
                        <h3>Hara</h3>
                        <p>Biologi</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/dimas.png') }}" alt="Dimas" />
                    <div class="mentor-info">
                        <h3>Dimas</h3>
                        <p>Kimia</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/cello.png') }}" alt="Cello" />
                    <div class="mentor-info">
                        <h3>Cello</h3>
                        <p>Bahasa Inggris</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/haqqul.png') }}" alt="Haqqul" />
                    <div class="mentor-info">
                        <h3>Haqqul</h3>
                        <p>Kalkulus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="subscription-box">
            <div class="text-content">
                <h2>TAKUT INGIN KETINGGALAN PROMO?</h2>
                <h2>LANGGANAN NEWSLETTER SEKARANG!</h2>
            </div>
            <div class="form-content">
                <input type="email" placeholder="Email Address..." />
                <button class="submit-btn">Submit</button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo">
                <h2>Learn Today<br>Lead Tomorrow</h2>
                <div class="social-links">
                    <a href="#"><img src="/youtube.svg" alt="YouTube"></a>
                    <a href="#"><img src="/tiktok.svg" alt="TikTok"></a>
                    <a href="#"><img src="/instagram.svg" alt="Instagram"></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>KATEGORI</h3>
                <ul class="footer-links">
                    <li><a href="#">Materi</a></li>
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

</body>
</html>
