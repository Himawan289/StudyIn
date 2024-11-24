<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn - Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo" class="logo">
    </div>

    <div class="register-container">
        <div class="header-container">
            <div class="header-text">
                <h2>StudyIn</h2>
                <p>Learn Today, Lead Tomorrow</p>
            </div>
            <img src="{{ asset('img/belajar 1.png') }}" alt="Learning Image" class="header-image">
        </div>

        <!-- Registration Form -->
        <form id="signup-form">
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
                    <input type="text" id="age" class="form-control" required readonly>
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
        
        <p class="or-signup-with">Or Sign Up with</p>
        <div class="social-container">
            <!-- Box Google -->
            <div class="social-box">
                <img src="{{ asset('img/google.png') }}" alt="Google Logo" class="social-logo">
                <span class="social-text">Google</span>
            </div>

            <!-- Box Facebook -->
            <div class="social-box">
                <img src="{{ asset('img/facebook.png') }}" alt="Facebook Logo" class="social-logo">
                <span class="social-text">Facebook</span>
            </div>

            <!-- Box Apple -->
            <div class="social-box">
                <img src="{{ asset('img/apple.png') }}" alt="Apple Logo" class="social-logo">
                <span class="social-text">Apple</span>
            </div>
        </div>

        <!-- Login Link -->
        <div class="account-login">
            Already have an account? <a href="/login" class="login-link">Login</a>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dobInput = document.getElementById('dob');
            const ageInput = document.getElementById('age');
            const form = document.getElementById('signup-form');

            dobInput.addEventListener('change', function() {
                const dobValue = dobInput.value;
                if (dobValue) {
                    const birthDate = new Date(dobValue);
                    const today = new Date();
                    let age = today.getFullYear() - birthDate.getFullYear();
                    const m = today.getMonth() - birthDate.getMonth();

                    // Jika belum ulang tahun tahun ini
                    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }

                    // Menampilkan umur di input umur
                    ageInput.value = age;
                }
            });

            // Form submission event to redirect to dashboard
            form.addEventListener('submit', function(event) {
                event.preventDefault();  // Mencegah form untuk disubmit secara default

                // Tambahkan validasi atau pengiriman data jika diperlukan

                // Jika berhasil, arahkan ke dashboard
                window.location.href = '/dashboard';  // Ubah URL sesuai dengan rute dashboard Anda
            });
        });
    </script>
</body>
</html>
