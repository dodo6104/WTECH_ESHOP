<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>
    
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <style>
        .wrapper{
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <section id="payment_methods">

            <div class="payment-method">
                <label for="visa">Payment Methods:</label>
                <img src="{{ asset('/icons/mastercard.png') }}" alt="Visa Icon" id="visa-icon">
                <img src="{{ asset('/icons/paypal.png') }}" alt="Visa Icon" id="visa-icon">
                <img src="{{ asset('/icons/paysafe.png') }}" alt="Visa Icon" id="visa-icon">
            </div>
        </section>
        
        <section id="authors_copyright">
            <p>&copy; 2024 GamingSpot. All rights reserved.</p>
            <p>Designed by The Mojto Brothers</p>
        </section>
    </div>
</body>

</html>