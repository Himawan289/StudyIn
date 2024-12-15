<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
    @include('components.navbar')

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

    @include('components.footer')
</body>
</html>