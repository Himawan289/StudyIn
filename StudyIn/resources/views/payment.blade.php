<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    @include('components.navbar')
    <main style="min-height: 100vh; padding: 6rem 0;">
        <h1 class="title" style="text-align: center;margin-bottom: 1rem;"> PEMBAYARAN</h1>

        <!-- Notifikasi Pembayaran Berhasil -->
        @if (session('payment_success'))
            <div style="text-align: center; color: green; padding: 1rem;">
                {{ session('payment_success') }}
            </div>
        @endif

        <div style="display: flex; justify-content: center; align-items: center; gap: 1rem; padding: 2rem;">
            <div class="grid-container">
                <!-- Bagian Kiri -->
                <div class="card card-left" style="width: 550px;">
                    <img src="{{'img\Metode Pembayaran.png'}}" alt="Course Thumbnail" class="card-image">
                    <h2 class="card-title">Detail Paket Bulanan</h2>
                    <p class="card-description">
                        Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's of the printing and typesetting industry. Lorem Ipsum has been the industry's. Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's of the printing and typesetting industry.Lorem Ipsum has been the industry's
                    </p>
                </div>

                <!-- Bagian Kanan -->
                <div class="card card-right" style="width: 550px; padding: 1rem;">
                    <h3>Pilih Metode Pembayaran:</h3>
                    <select class="dropdown-button">
                        <option value="">Pilih Metode Pembayaran</option>
                        <option value="transfer-bank">Transfer Bank</option>
                        <option value="e-wallet">e-Wallet</option>
                        <option value="credit-card">Kartu Kredit</option>
                    </select>

                    <h3 style="margin-top: 20px;">Gunakan Kode Diskon:</h3>
                    <div class="discount-section">
                        <img src="{{ asset('img/Icon Diskon.png') }}" alt="Diskon Icon" style="width: 50px; height: 50px;">
                        <div style="flex: 1;">
                            <input type="text" placeholder="Masukkan Kode Diskon" style="width: 100%; padding: 8px; border: none; border-radius: 15px;">
                            <p style="margin: 5px 0 0; color: #000000;">Selamat, Anda Mendapatkan Diskon 50%</p>
                        </div>
                    </div>

                    <h3 style="margin-top: 20px;">Detail Pembayaran:</h3>
                    <div class="payment-details">
                        <p>Harga: <b>100.000</b></p>
                        <p>Diskon: <b>50.000</b></p>
                        <p>Total: <b>50.000</b></p>
                    </div>

                    <!-- Formulir Pembayaran -->
                    <form action="{{ route('payment.process') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-submit">Bayar</button>
                    </form>
                </div>
            </div>
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
