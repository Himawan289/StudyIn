<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <link rel="stylesheet" href="{{ asset('css/detailCourse.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            max-width: 640px;
            height: auto;
        }

        .course-image {
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            position: relative;
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 0;
            border-radius: 8px;
            overflow: hidden;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
        }

        .youtube-video {
            width: 100%;
            height: 450px;
        }

        @media (max-width: 768px) {
            .youtube-video {
                height: 300px;
            }
        }
    </style>
</head>
<body>
<div class="navbar-spacing">@include('components.navbar')</div>

<section class="course-detail">
    <div class="container">
        <div class="course-info">
            <!-- Video Container -->
            <div class="video-container">
                <img src="{{ asset('img/detailcourse.png') }}" alt="Course Image" class="course-image" id="placeholder">
            </div>

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

<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>
        <iframe id="video" class="youtube-video" src="https://www.youtube.com/embed/y63ysWMYHbk?rel=0&autoplay=0" 
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>

@include('components.footer')

<script>
    const placeholder = document.getElementById('placeholder');
    const modal = document.getElementById('videoModal');
    const closeModal = document.getElementById('closeModal');
    const video = document.getElementById('video');

    placeholder.addEventListener('click', () => {
        modal.style.display = 'flex';
        video.src = video.src.replace('autoplay=0', 'autoplay=1'); // Autoplay video saat modal terbuka
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        video.src = video.src.replace('autoplay=1', 'autoplay=0'); // Hentikan video saat modal ditutup
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            video.src = video.src.replace('autoplay=1', 'autoplay=0'); // Hentikan video saat klik di luar modal
        }
    });
</script>

</body>
</html>
