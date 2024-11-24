<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo">
        </div>
        <div class="nav-links">
            <a href="#">HOME</a>
            <a href="#">MATERI</a>
            <a href="#">JADWAL</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Belajar apa hari ini?">
            <img src="{{ asset('img/dimas.png') }}" alt="User Avatar" class="user-avatar">
        </div>
    </nav>

    <div class="container">
        <h1>INVOICE</h1>

        <div class="payment-details">
            <div class="grid-container">
                <div class="billing-info">
                    <div>
                        <strong>Billed to:</strong>
                        <div>dimasrespati@gmail.com</div>
                    </div>
                    <div>
                        <strong>Billed details:</strong>
                        <div>Dimas Respati</div>
                    </div>
                </div>
                <div class="invoice-info">
                    <div><strong>Invoice Number:</strong> INV 1234-10-2024</div>
                    <div><strong>Subject:</strong> StudyIn 1 Month</div>
                    <div><strong>Currency:</strong> IDR - Indonesian Rupiah</div>
                    <div><strong>Issued:</strong> 10 October 2024</div>
                    <div><strong>Due Date:</strong> 11 October 2024</div>
                    <div><strong>Notes:</strong> -</div>
                </div>
            </div>
        </div>

        <table class="invoice-table">
            <thead>
                <tr>
                    <th>PRODUCT</th>
                    <th>QTY</th>
                    <th>UNIT PRICE</th>
                    <th>AMOUNT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Paket Bulanan StudyIn</td>
                    <td>1</td>
                    <td>100.000</td>
                    <td>100.000</td>
                </tr>
            </tbody>
        </table>

        <div class="totals">
            <div class="totals-row">
                <span>Subtotal</span>
                <span>100.000</span>
            </div>
            <div class="totals-row">
                <span>Discount (50%)</span>
                <span>50.000</span>
            </div>
            <div class="totals-row">
                <span>Total</span>
                <span>50.000</span>
            </div>
            <div class="totals-row">
                <span>Amount Due</span>
                <span>50.000</span>
            </div>
        </div>

        <div class="terms">
            <h3>Terms & Conditions</h3>
            <p>Please ensure payment is made by the due date to avoid any late fees.</p>
            <p>Payment is due on or before the due date</p>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h2>Learn Today<br>Lead Tomorrow</h2>
            </div>
            <div>
                <h2>KATEGORI</h2>
                <ul>
                    <li><a href="#">Materi</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">E-Library</a></li>
                </ul>
            </div>
            <div>
                <h2>QUICK ACCESS</h2>
                <ul>
                    <li><a href="#">Jadwal</a></li>
                    <li><a href="#">Video Pembelajaran</a></li>
                    <li><a href="#">Latihan Soal</a></li>
                    <li><a href="#">Diskusi</a></li>
                </ul>
                <div class="social-icons">
                    <img src="{{ asset('img/Youtube.png') }}" alt="YouTube">
                    <img src="{{ asset('img/Tik tok.png') }}" alt="TikTok">
                    <img src="{{ asset('img/Instagram Logo.png') }}" alt="Instagram">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>