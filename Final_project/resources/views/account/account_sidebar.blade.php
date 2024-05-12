<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>

    <link rel="stylesheet" href="{{ asset('css/account/account_panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transitioned_button.css') }}">
</head>

<body>

<div class="account-menu">
    <div class="option-row">
        <button class="transitioned-button" >My Orders</button>
        <button class="transitioned-button" >Personal Data</button>
    </div>

    <div class="option-row">
        <form action="/logout" method="POST">
            @csrf
            <button class="transitioned-button" type="submit" class="transitioned-button">Logout</button>
        </form>
    </div>
</div>

</body>