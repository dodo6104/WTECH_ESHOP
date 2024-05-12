<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>
    <link rel="stylesheet" href="{{ asset('/css/payment_process/cart_list.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/payment_process/list_item.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/submit_button.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sections/lower_control_panel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/content_section.css') }}">
    <style>
        @media only screen and (max-width: 600px) {
            .control-panel {
                flex-direction: column;
                gap: 5px;
            }
        }
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .hidden { display: none; }

        .quantity-entry {
    display: flex;
    align-items: center;
    width: 120px; /* Adjust width as needed */
}

.quantity-input {
    font-size: 16px;
    width: 40px;
    padding: 5px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 0 10px; /* Add some space between input and buttons */
}

.quantity-btn {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff; /* Blue color for buttons */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth color transition */
}

.quantity-btn:hover {
    background-color: #0056b3; /* Darker shade of blue on hover */
}

.total-price-wrapper{
    font-size: 20px;
}
    </style>
</head>
<body>
    @include('header')

    <main id="cart-list-panel" class="content-container">
        <div id="my-orders-section" class="content-section">
            <h1 class="content-section-header">Cart List</h1>
            <hr class="content-section-header-line">

            <div id="cart-list-i" class="cart-list">
                @if (empty($itemsArray))
                    <div class="empty-cart-message">
                        <p>Košík je prázdny.</p>
                    </div>
                @else
                    @foreach ($itemsArray as $item)
                        <section class="list-item">
                            <div class="index-name-wrapper">
                                <label class="game-index">{{ $loop->index + 1 }}.</label>
                                <label class="game-name">{{ $item->name }}</label>
                            </div>

                            <div class="order-control-panel">
                                <div class="price-quantity-frame">
                                    <label class="game-price">{{ $item->onegametotal }}€</label>
                                    <form action="/cart/update/{{$item->id}}" method="post" id="update-cart-form-{{$item->id}}">
                                        @csrf
                                        <input class="quantity-input" type="number" name="quantity" value="{{ $item->quantity }}" min="1" onchange="this.form.submit()">
                                    </form>
                                </div>

                                <form action="/cart/remove/{{$item->id}}" method="post">
                                    @csrf
                                    <button type="submit">
                                        <img class="trash-icon" src={{ asset("icons/trash.png") }}>
                                    </button>
                                </form>
                            </div>
                        </section>
                    @endforeach

                    <div class="total-price-wrapper">
                        <div class="total-price-frame">
                            <div>
                                <label>Total:</label>
                            </div>
                            <div>
                                <label class="total-price">{{ $total }}€</label>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="control-panel">
                <button class="submit-button" onclick="window.location.href='/'">Back to Shopping</button>
                <button class="submit-button {{ empty($itemsArray) ? 'hidden' : '' }}" onclick="window.location.href='/cart/shipping'">Continue</button>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('input[type="number"][name="quantity"]').forEach(input => {
            input.addEventListener('change', function() {
                this.form.submit();
            });
        });
    </script>
    @include('footer')

</body>
</html>
