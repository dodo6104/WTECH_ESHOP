<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>


    <link rel="stylesheet" href="{{ asset('/css/submit_button.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('/css/sections/lower_control_panel.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('/css/content_section.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('/css/content_wrapper.css') }}"></link>
    
    <style>
        body{
            margin: 0;
        }
        
        .summary-panel{
            width: 80%;
            max-width: 500px
        }

        label {
            font-size: 27px;
        }

        .price-value{
            color: white;
        }

        .original-price-div, .saved-amount-div, .discounted-price-div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .discounted-price-div {
            
            background-image: linear-gradient(rgb(238, 255, 0), rgb(255, 174, 0));    padding: 10px; /* Add some padding for better spacing */
            border: 2px solid;
            margin-top: 2px;
            padding-top: 5px;
            padding-right: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
        }

        .original-price-div, .saved-amount-div {
            background-image: linear-gradient(rgb(0, 123, 255), rgb(4, 6, 132));    padding: 10px; /* Add some padding for better spacing */
        }

        .original-price-div{
            border-top: 2px solid;
            border-left: 2px solid;
            border-right: 2px solid;
        }

        .saved-amount-div{
            border-left: 2px solid;
            border-right: 2px solid;
            border-bottom: 2px solid;
        }

        .price-label, .saved-amount-label, .discounted-price-label {
            font-weight: bold;
            color: white;       
        }

        .discounted-price-label{
            color: black;
        }

        .discounted-price{
            font-weight: bold;
            font-size: 30px;
        }

        .saved-amount {
            font-weight: bold;
            color: red;
        }

        .discounted-price-label{
            font-size: 30px;
        }


        @media only screen and (max-width: 650px){
            .control-panel{
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 5px;
            }
        }
    </style>

</head>

<body>

@include('header')


    <div class="content-container">

        <section class="content-section">
            <h1 class="content-section-header">Summary</h1>
            <hr class="content-section-header-line">
            <form id="paymentForm" action="/cart/payment" method="POST">
                @csrf
                <div class="content-wrapper-col">
                    <div class="summary-panel">

                        <div class="original-price-div">
                            <label class="price-label" for="price-value">Original Price:</label>
                            <label class="price-value">{{ $totalpricewithoutd }}€</label>
                        </div>

                        <div class="saved-amount-div">

                            <label class="saved-amount-label">You saved:</label>
                            <label class="saved-amount">{{ $saved }}€</label>
                        </div>

                        <div class="discounted-price-div">
                            <label class="discounted-price-label">Total Price:</label>
                            <label class="discounted-price">{{ $totalpricewithd }}€</label>
                        </div>
                    </div>
                </div>

                <div class="control-panel">
                    <button class="submit-button" type="button" onclick="window.location.href='/cart'">Back to cart</button>
                    <button class="submit-button" onclick="window.location.href='/payment'">Proceed to Payment</button>
                </div>
            </form>
        </section>
    </div>

    @include('footer')

</body>