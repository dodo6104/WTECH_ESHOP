<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My orders</title>

    <link rel="stylesheet" href="{{ asset('/css/content_section.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/my_orders_view.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/submit_button.css') }}">

    <style>
        #order-frame-submit-button {
            margin-bottom: 5px;
            margin-top: 10px;

            border-radius: 30px;
        }
    </style>
</head>

<body>

@include('header')

<div class="account-section-wrapper">

@include('account/account_sidebar')

<div id="my-orders-section" class="content-container">
    <h1 class="content-section-header">My Orders</h1>
    <hr class="content-section-header-line">

    @foreach ($purchasedGames as $game)
        <div id="order-row" class="order-row">
            <div class="game-frame">
                <div class="pics">
                    <img class="game-image" src="{{ asset('/images/games/' . $game->name . '/1.webp') }}" alt="GTA V Game Image">
                </div>
                <div class="game-details">
                    <div class="game-name">
                        <label id="game-name-label">{{ $game->name }}</label>
                    </div>
                    <div class="game-price">
                        <label id="game-price-label">{{ number_format($game->price, 2) }}€</label>
                    </div>
                </div>
                <div class="control-panel">
                    <button id="order-frame-submit-button" class="submit-button" onclick="window.location.href='/game/{{$game->id}}'">Show Game</button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>
</div>

@include('footer')

</body>

<style>
    html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
</style>