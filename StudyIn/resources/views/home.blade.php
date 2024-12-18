<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
</head>

<body>

    <header class="header">
        @include('components.navbarHome')
    </header>

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
                <p class="mentors-text">Di StudyIn, Kami Berkomitmen Menghadirkan Para Profesor Terbaik untuk Memberikan
                    Kursus-Kursus Berkualitas Unggul.</p>
                <a href="#" class="see-all-btn">Semua Mentor</a>
            </div>

            <div class="mentors-grid">
                <div class="mentor-card">
                    <img src="{{ asset('img/nadia.jpeg') }}" alt="Nadia" />
                    <div class="mentor-info">
                        <h3>Nadia</h3>
                        <p>Matematika</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/erwin.jpeg') }}" alt="Erwin" />
                    <div class="mentor-info">
                        <h3>Erwin</h3>
                        <p>Fisika</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/hara.jpeg') }}" alt="Hara" />
                    <div class="mentor-info">
                        <h3>Hara</h3>
                        <p>Biologi</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/dimas.jpeg') }}" alt="Dimas" />
                    <div class="mentor-info">
                        <h3>Dimas</h3>
                        <p>Kimia</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/cello.jpeg') }}" alt="Cello" />
                    <div class="mentor-info">
                        <h3>Cello</h3>
                        <p>Bahasa Inggris</p>
                    </div>
                </div>
                <div class="mentor-card">
                    <img src="{{ asset('img/haqqul.jpeg') }}" alt="Haqqul" />
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

    @include('components.footer')

</body>

</html>
