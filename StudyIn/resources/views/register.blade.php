<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Adding logo as a favicon in the head -->
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0fe;
            margin: 0;
            padding: 0;
        }
        /* Logo styles (positioned on the top-left of the page) */
        .logo-container {
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .logo {
            width: 150px; /* Adjust the size of the logo */
        }
        .register-container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 2px solid #ffcc66; /* Border for register form */
        }
        .btn-signup {
            background-color: #ffcc66;
            border: none;
            width: 100%;
        }
        .btn-signup:hover {
            background-color: #e6b85c;
        }
        footer {
            background-color: #fff;
            padding: 20px;
            border-top: 2px solid #ffcc66; /* Border for footer */
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
        .footer {
            border-top: 2px solid #ffcc66;
            padding: 20px;
            text-align: center;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px; /* Adds spacing between columns */
        }
        .footer-left, .footer-right {
            flex: 1; /* Ensures both sections take equal width */
        }
        .footer-links {
            flex: 2; /* Makes the center links section larger */
            display: flex;
            flex-direction: column;
        }
        .footer-left h2, .footer-right h3 {
            margin-bottom: 10px; /* Space below titles */
        }
        .footer-right p {
            margin-top: 10px; /* Adds spacing between social media icons and copyright */
        }
        .footer-right .social-media {
            display: flex;
            justify-content: center;
        }
        .footer-links h3, .footer-left h2 {
            margin-bottom: 10px; /* Adds space below headers */
        }
        .footer-links p {
            margin: 5px 0; /* Adds spacing between items */
        }
        .social-logo {
            width: 25px;
            margin: 0 10px;
        }
        /* Flexbox for social media icons and copyright text */
        .footer-right {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .social-media {
            display: flex;
            justify-content: center;
        }
        .copyright {
            margin-top: 10px; /* Spacing between icons and copyright */
        }
        /* Flexbox container for header text and image */
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header-text {
            text-align: center;
            margin-right: 20px; /* Space between text and image */
        }
        .header-image {
            width: 200px; /* Adjust the size of the image */
        }
    </style>
</head>
<body>
    <!-- Logo at the top-left (body section) -->
    <div class="logo-container">
        <img src="{{ asset('img/logo.png') }}" alt="Study In Logo" class="logo">
    </div>

    <div class="register-container">
        <!-- Header container for the text and image -->
        <div class="header-container">
            <div class="header-text">
                <h2>StudyIn</h2>
                <p>Learn Today, Lead Tomorrow</p>
            </div>
            <img src="{{ asset('img/belajar1.png') }}" alt="Learning Image" class="header-image">
        </div>
        <form>
            <div class="row g-3">
                <!-- First Name -->
                <div class="col-md-6">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" id="first-name" class="form-control" required>
                </div>
                
                <!-- Last Name -->
                <div class="col-md-6">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" id="last-name" class="form-control" required>
                </div>
                
                <!-- Date of Birth -->
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" class="form-control" required>
                </div>
                
                <!-- Age -->
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" id="age" class="form-control" required>
                </div>
                
                <!-- Grade -->
                <div class="col-md-6">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="text" id="grade" class="form-control" required>
                </div>
                
                <!-- School Name -->
                <div class="col-md-6">
                    <label for="school-name" class="form-label">School Name</label>
                    <input type="text" id="school-name" class="form-control" required>
                </div>
                
                <!-- Phone Number -->
                <div class="col-md-6">
                    <label for="phone" class="form-label">No. Telp</label>
                    <input type="tel" id="phone" class="form-control" required>
                </div>
                
                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                
                <!-- Password -->
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                
                <!-- Confirm Password -->
                <div class="col-md-6">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm-password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-signup mt-3">Sign up</button>
        </form>
        <hr>
        <p class="text-center">Or Sign Up with</p>
        <div class="d-flex justify-content-center">
            <button class="btn btn-light me-2"><i class="fab fa-google"></i> Google</button>
            <button class="btn btn-light me-2"><i class="fab fa-facebook"></i> Facebook</button>
            <button class="btn btn-light"><i class="fab fa-apple"></i> Apple</button>
        </div>
        <p class="text-center mt-3">Already have an account? <a>Login</a></p>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Left Column (Kategori) -->
                <div class="footer-left">
                    <h2>Learn Today, <br> Lead Tomorrow</h2>
                </div>

                <!-- Center Column (Links) -->
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

                <!-- Right Column (Logo and Social Media) -->
                <div class="footer-right">
                    <img src="{{ asset('img/logo.png') }}" alt="Study In Logo" class="footer-logo">
                    <div class="social-media">
                        <a href="#"><img src="{{ asset('img/Youtube.png') }}" alt="Youtube Logo" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/Tik tok.png') }}" alt="Tiktok Logo" class="social-logo"></a>
                    </div>
                    <p class="copyright">© 2024 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional: Bootstrap JS and icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
