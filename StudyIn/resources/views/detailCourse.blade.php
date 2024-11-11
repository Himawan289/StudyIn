<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            padding: 20px; /* Menambah padding 20px di kiri dan kanan */
        }
        .container {
            max-width: 1200px; /* Atur lebar maksimal container */
            margin: 0 auto;
        }
        /* Navbar Spacing */
        .navbar-spacing {
            margin-top: 60px; /* Menambahkan jarak lebih besar antara navbar dan konten utama */
        }

        /* Course Detail Section */
        .course-detail {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .course-info {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .course-image {
            width: 300px;
            height: auto;
            border-radius: 10px;
        }
        .course-description {
            max-width: 500px;
        }
        .course-description h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .course-description p.author {
            font-size: 18px;
            font-weight: bold;
            color: #666;
            margin-bottom: 10px;
        }
        .course-description p.details {
            background-color: #ffeb99;
            padding: 10px;
            border-radius: 10px;
            color: #333;
            font-size: 14px;
            line-height: 1.6;
        }

        /* Recommended Courses Section */
        .recommended-courses {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .recommended-courses h3 {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
        }
        .course-card {
            background-color: #fff2cc;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            text-align: left;
        }
        .course-card:hover {
            transform: translateY(-5px);
        }
        .course-card img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .course-card h4 {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .course-card p {
            color: #666;
            font-size: 12px;
            line-height: 1.4;
            margin: 0;
            text-align: left;
        }
    </style>
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
                <p class="details">Learn Web Development in 2024! Build apps, websites, projects using HTML, CSS, JavaScript, PHP, Python, MySQL, &amp; more!</p>
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

</body>
</html>
