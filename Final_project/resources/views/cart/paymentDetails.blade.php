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
    <link rel="stylesheet" href="{{ asset('/css/transitioned_button.css') }}"></link>


    <style>
        body{
            margin: 0;
        }
        
        .pay-button {
            height: 70px;
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #ff0000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            }

            .pay-button:hover {
            background-color: #fe6100;
            }

            .pay-button:active {
            background-color: #b35f00;
            transform: translateY(1px);
            }


        .view-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .info-row {
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 5px;
            flex-grow: 1;
            
        }

        .input-entry{
            margin: 5px;
        }

        @media only screen and (max-width: 600px){

            .info-row{
                width: 100%;
                flex-direction: column;
                margin: 0px;
                padding: 0px;
                align-items: center;
                gap: 0px;
            }
        }

        .input-entry{
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .nickname_entry {
            display: flex;
            font-size: 17px;
            width: 100%;
            height: 35px;
            padding: 10px;
            margin-bottom: 10px; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button-content{
            display: flex;
            flex-direction: space-between
        }

        .slotted-button{
            border: 1px solid;
            border-color: black;
            width: 50%;
        }

        .submit-button{
            margin: 5px
        }

        .payment-details{
            display: flex;
            flex-direction: column;
            justify-content: left;
           
            width: 100%;
            gap: 15px;
        }

        .payment-options{
            display: flex;
            flex-direction: row;
            width: 100%;
         
        }


        .payment-info-wrapper{
            display: flex;
            flex-direction: row;
            align-items: bottom;
            justify-content: center;
            min-width: none;
            width: 100%;
        }


        .payment-info, .payment-info-disabled {
            width: 50%;
            border: 1px solid;
        }

        .payment-info-disabled{
            opacity: 0.5;
            cursor: not-allowed;
        }

        .continue-shopping-label{
            font-size: 20px;
            text-decoration: underline;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .pay-button-wrapper{
        
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            width: 50%;
            padding-bottom: 20px;
        }

        .card-details-header{
            padding-left: 5px;
        }


        .visa-icon, .mastercard-icon, .paysafe-icon, .paypal-icon {
            width: 80px;
            height: auto;
        }

        .option-section {
            display: flex;
            flex-direction: row;
            width: 50%;
        }


        @media only screen and (max-width: 1000px){
            .payment-details{
     
                justify-content: center;
                align-items: center
            }
            

            .payment-options{

                min-width: 600px;
                flex-direction: column;
                gap: 0px;
                justify-content: left;
            }

            .payment-info-wrapper{
                min-width: 500px;
                width: 100%;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .payment-info{
                width: 100%;
            }

            .control-panel{
                justify-content: center;
                padding-left: 0px;
            }
            
            .option-section{
                width: 100%;
            }
        }

        @media only screen and (max-width: 600px){
            .payment-options{
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .option-section{
                flex-direction: column;
                justify-content: center;
                align-items: center;
                max-width: 300px;
                
            }

            .payment-info-wrapper{
                min-width: 300px;
                width: 100%;
            }

            .payment-info, .payment-info-disabled{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .pay-button-wrapper{
                width: 90%;
                justify-content: center;
                align-items: center;
            }


            .pay-button{
                width: 80%;
            }

            
        }
    
    </style>
</head>

<body>

@include('header')

<div class="content-container">

    <section class="content-section">
        <h1 class="content-section-header">Payment Details</h1>
        <hr class="content-section-header-line">

        <div class="content-wrapper-col"> 
        <form class="input-form" action="/pay" method="POST">
            @csrf
            <section class="payment-details">
                <div class="payment-info-wrapper">
                    <section :class="{ 'payment-info': selectedButton === '0' || selectedButton === '1', 'payment-info-disabled': selectedButton !== '0' && selectedButton !== '1' }">
                        <h2 class="card-details-header">Card Details</h2>
                        <section class="view-section">
                            <div class="info-row">
                                <div class="input-entry">
                                    <input type="text" class="nickname_entry" name="creditCardNumber" placeholder="Credit Card Number" required>
                                </div>
                                <div class="input-entry">
                                    <input type="text" class="nickname_entry" name="cardholderName" placeholder="Cardholder Name" required>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="input-entry">
                                    <input type="text" class="nickname_entry" name="expirationDate" placeholder="Expiration Date" required>
                                </div>
                                <div class="input-entry">
                                    <input type="text" class="nickname_entry" name="cvv" placeholder="CVV/CVC" required>
                                </div>
                            </div>
                        </section>
                    </section>
                    <div class="pay-button-wrapper">
                        <label class="continue-shopping-label" onclick="window.location.href='/'">Continue Shopping?</label>
                        <button class="pay-button" type="submit" >Pay</button>
                    </div>
                </div>
            </section>
            </form>
        </div>

        <div class="control-panel">
            <button class="submit-button" onclick="window.location.href='/cart'">Back to cart</button>
        </div>

    </section>    
</div>
@include('footer')

</body>