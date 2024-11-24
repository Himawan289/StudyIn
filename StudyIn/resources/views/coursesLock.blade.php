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
    <main style="min-height: 100vh; padding: 6rem 0;">
        <h1 class="title" style="text-align: center;margin-bottom: 1rem;"> MATERI</h1>
        <div
            style="width: 83.333333%; margin: 0 auto; display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            @foreach ($courses as $course)
                @include('components.course-cardLock', [
                    'thumbnail' => $course['thumbnail'],
                    'courseTitle' => $course['courseTitle'],
                    'lessonCount' => $course['lessonCount'],
                    'courseClass' => $course['courseClass'],
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