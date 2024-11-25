<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn - Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="logo-container">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo">
        </a>
    </div>

    <div class="login-container">
        <div class="header-container">
            <div class="header-text">
                <h2>StudyIn</h2>
                <p>Learn Today, Lead Tomorrow</p>
            </div>
            <img src="{{ asset('img/belajar 1.png') }}" alt="Learning Image" class="header-image">
        </div>

        <!-- Login Form -->
        <form id="login-form">
            <div class="row g-3">
                <!-- Email -->
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                
                <!-- Password -->
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn btn-signin mt-3">Sign in</button>
        </form>
        
        <p class="or-signin-with">Or Sign In with</p>
        <div class="d-flex justify-content-center">
            <!-- Google -->
            <div class="social-box">
                    <img src="{{ asset('img/google.png') }}" alt="Google Logo" class="social-logo">
                    <span class="social-text">Google</span>
                </a>
            </div>
            
            <!-- Facebook -->
            <div class="social-box">
                    <img src="{{ asset('img/facebook.png') }}" alt="Facebook Logo" class="social-logo">
                    <span class="social-text">Facebook</span>
                </a>
            </div>
            
            <!-- Apple -->
            <div class="social-box">
                    <img src="{{ asset('img/apple.png') }}" alt="Apple Logo" class="social-logo">
                    <span class="social-text">Apple</span>
                </a>
            </div>
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
                        <a href="#"><img src="{{ asset('img/Youtube.png') }}" alt="Youtube Logo" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/Tik tok.png') }}" alt="Tiktok Logo" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram Logo" class="social-logo"></a>
                    </div>
                </div>
            </div>
            <p>© 2024 All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('login-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();  // Mencegah form untuk disubmit secara default

                // Anda bisa menambahkan logika validasi atau pengiriman data ke server di sini

                // Jika login berhasil, arahkan pengguna ke halaman dashboard
                window.location.href = '/dashboard';  // Gantilah '/dashboard' dengan rute dashboard Anda
            });
        });
    </script>
</body>
</html>
