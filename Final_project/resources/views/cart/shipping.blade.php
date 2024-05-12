<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>
    <link rel="stylesheet" href="{{ asset('/css/content_wrapper.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sections/lower_control_panel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/submit_button.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content_section.css') }}">
    <style>
        .shipping-details {
            max-width: 700px;
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .submit-button {
            min-width: 200px;
        }
        .detail-row {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            width: 100%;
            gap: 15px;
        }
        .select-widget {
            min-width: 200px;
            max-width: 400px;
        }
        @media only screen and (max-width: 700px) {
            .detail-row {
                flex-direction: column;
                width: 60%;
            }
            .shipping-details {
                width: 90%;
            }
        }
        .select-widget {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .select-widget option {
            font-size: 16px;
        }
        .select-widget option:checked {
            background-color: #00a2ff;
            color: #ff9900;
            font-weight: bold;
        }
        .select-widget option:hover {
            background-color: #ffffff;
        }

        body{
            margin: 0;
        }
     
    </style>
</head>


<body>

@include('header')

<main class="content-container">
    <form action="/cart/shipping-submit" method="POST">
        @csrf
        <section class="content-section">
            <h1 class="content-section-header">Shipping Details</h1>
            <hr class="content-section-header-line">
            <div class="content-wrapper-col">
                <div class="shipping-details">
                    <div class="detail-row">
                        <select class="select-widget" name="shippingType" required>
                            <option disabled selected value="">Type of Shipping</option>
                            <option value="option-1">Local Post Service</option>
                            <option value="option-2">GLS Delivery Service</option>
                            <option value="option-3">DHL Express</option>
                        </select>
                        <select class="select-widget" name="country" required>
                        <option disabled selected value="">Country</option>
                        <option value="AT">Austria</option>
                        <option value="AU">Australia</option>
                        <option value="BE">Belgium</option>
                        <option value="CA">Canada</option>
                        <option value="CN">China</option>
                        <option value="CZ">Czech Rebulic</option>
                        <option value="DK">Denmark</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        <option value="IN">India</option>
                        <option value="IT">Italy</option>
                        <option value="JP">Japan</option>
                        <option value="KR">South Korea</option>
                        <option value="MX">Mexico</option>
                        <option value="NL">Netherlands</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NO">Norway</option>
                        <option value="PT">Portugal</option>
                        <option value="RU">Russia</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="ZA">South Africa</option>
                        <option value="SK">Slovakia</option>
                        <option value="ES">Spain</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TR">Turkey</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        </select>
                </div>
                <div class="detail-row">
                    <input class="select-widget" name="postCode" placeholder="Post Code" required>
                    <input class="select-widget" name="city" placeholder="City" required>
                </div>
                <div class="detail-row">
                    <input class="select-widget" name="address" placeholder="Address" required>
                    <input class="select-widget" type="number" name="phone" placeholder="Phone" required>
                </div>
            </div>
        </div>
        <div class="control-panel">
            <button class="submit-button" type="button" onclick="window.location.href='/cart'">Back to cart</button>
            <button class="submit-button" type="submit">Continue</button>
        </div>
    </section>
</form>
</main>
@include('footer')


</body>
</html>