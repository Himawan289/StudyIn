@php
    $courses = [
        [
            'thumbnail' => 'img/image.png',
            'courseTitle' => 'Learn Figma - UI/UX Design Essential Training ',
            'lessonCount' => 6,
            'courseClass' => '1 SMA',
        ],
        [
            'thumbnail' => 'img/image.png',
            'courseTitle' => 'Master Photoshop for Beginners',
            'lessonCount' => 10,
            'courseClass' => '2 SMA',
        ],
        [
            'thumbnail' => 'img/image.png',
            'courseTitle' => 'Illustrator Essentials: From Zero to Hero',
            'lessonCount' => 8,
            'courseClass' => '3 SMA',
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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    @include('components.navbar')

    <!-- Konten Dashboard -->
    <div class="dashboard-content">
        <h1>Welcome, Dimas!</h1>
        <p>Have a good day!</p>

        <h2>Rekomendasi Materi Hari Ini</h2>

        <div class="slider">
            <div><img src="{{ asset('img/slider.png') }}" alt="Materi 1"></div>
            <div><img src="{{ asset('img/slider.png') }}" alt="Materi 2"></div>
            <div><img src="{{ asset('img/slider.png') }}" alt="Materi 3"></div>
        </div>

        <h2 class="histori-header">
            Histori Belajar
            <a href="#" class="see-all">See All</a>
        </h2>
        
        <div class="course-list">
            <!-- Repeat the course card component three times -->
            @foreach ($courses as $course)
                @include('components.course-card', [
                    'thumbnail' => $course['thumbnail'],
                    'courseTitle' => $course['courseTitle'],
                    'lessonCount' => $course['lessonCount'],
                    'courseClass' => $course['courseClass'],
                ])
            @endforeach

        </div>

    </div>

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
                                <img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram Logo"
                                    class="social-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p>© 2024 All Rights Reserved.</p>
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
