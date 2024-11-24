<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIn Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="StudyIn Logo" class="logo">
            <h1>StudyIn</h1>
            <p>Learn Today, Lead Tomorrow</p>
            <div class="illustration">
                <img src="{{ asset('images/belajar1.png') }}" alt="Illustration">
            </div>
        </div>
        
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="{{ route('dashboard') }}" class="Sign In Button">Sign In</a>
            <div class="separator">Or sign in with</div>
            <div class="social-login">
                <a href="{{ route('login', 'google') }}" class="social-btn google">Google</a>
                <a href="{{ route('login', 'facebook') }}" class="social-btn facebook">Facebook</a>
                <a href="{{ route('login', 'apple') }}" class="social-btn apple">Apple</a>
            </div>
        </form>
    </div>
</body>
</html>
