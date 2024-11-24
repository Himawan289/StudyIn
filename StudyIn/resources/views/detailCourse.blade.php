<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <link rel="stylesheet" href="{{ asset('css/detailCourse.css') }}">
</head>
<body>
<div class="navbar-spacing">@include('components.navbar')</div>

<section class="course-detail">
    <div class="container">
        <div class="course-info">
            <img src="{{ asset('img/detailcourse.png') }}" alt="Course Image" class="course-image">
            <div class="course-description">
                <h2>The Complete Web Developer Course 3.0</h2>
                <p class="author">Rob Percival</p>
                <p class="details">Learn Web Development in 2024! Build apps, websites, projects using HTML, CSS, JavaScript, PHP, Python, MySQL, & more!</p>
            </div>
        </div>
        <h3>Direkomendasikan untuk Anda</h3>
        <div class="recommended-courses">
            <!-- Repeat the course card component three times -->
            @for ($i = 0; $i < 3; $i++)
                <div class="course-card">
                    <img src="{{ asset('img/othercourse.png') }}" alt="Course Image">
                    <h4>Python and Django Full Stack Web Developer Bootcamp</h4>
                    <p>Learn to build websites with HTML, CSS, Bootstrap, JavaScript, jQuery, Python 3, and Django!</p>
                </div>
            @endfor
        </div>
    </div>
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
                    <a href="#"><img src="{{ asset('img/Youtube.png') }}" alt="Youtube Logo" class="social-logo"></a>
                    <a href="#"><img src="{{ asset('img/Tik tok.png') }}" alt="Tiktok Logo" class="social-logo"></a>
                    <a href="#"><img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram Logo" class="social-logo"></a>
                </div>
            </div>
        </div>
        <p>© 2024 All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
