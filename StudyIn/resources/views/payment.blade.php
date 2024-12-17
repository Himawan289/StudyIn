<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    @include('components.navbar')
    <main style="min-height: 100vh; padding: 6rem 0;">
        <h1 class="title" style="text-align: center;margin-bottom: 1rem;"> PEMBAYARAN</h1>
        <div style="display: flex; justify-content: center; align-items: center; gap: 1rem; padding: 2rem;">

            <div class="grid-container">
                <!-- Bagian Kiri -->
                <div class="card card-left" style="width: 550px;">
                    <img src="{{ 'img\Metode Pembayaran.png' }}" alt="Course Thumbnail" class="card-image">
                    <h2 class="card-title">Detail Paket Bulanan</h2>
                    <p class="card-description">
                        Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                        Lorem Ipsu is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's of the printing and typesetting industry.Lorem Ipsum has been the industry's
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
                        <img src="{{ asset('img/Icon Diskon.png') }}" alt="Diskon Icon"
                            style="width: 50px; height: 50px;">
                        <div style="flex: 1;">
                            <input type="text" placeholder="Masukkan Kode Diskon"
                                style="width: 100%; padding: 8px; border: none; border-radius: 15px;">
                            <p style="margin: 5px 0 0; color: #000000;">Selamat, Anda Mendapatkan Diskon 50%</p>
                        </div>
                    </div>

                    <h3 style="margin-top: 20px;">Detail Pembayaran:</h3>
                    <div class="payment-details">
                        <p>Harga: <b>100.000</b></p>
                        <p>Diskon: <b>50.000</b></p>
                        <p>Total: <b>50.000</b></p>
                    </div>
                    <a href="/invoice">
                        <button class="btn-submit">
                            Bayar
                        </button>
                    </a>
                </div>

            </div>
    </main>


    </main>


    @include('components.footer')

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
