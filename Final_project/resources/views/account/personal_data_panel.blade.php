
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>

    <link rel="stylesheet" href="{{ asset('/css/content_section.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/account/personal_data.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/transitioned_button.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/account/account_panel.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/submit_button.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/input_panel.css')}}">

    <style>
        .wrapper{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>

<body>

@include('header')

<div class="wrapper">
@include('account/account_sidebar')

<main class="content-container">
    <div id="personal-data-section" class="content-section">
                    
        <header class="content-section-head">
            <h1 class="content-section-header">Personal Data</h1>
            <hr class="content-section-header-line">
        </header>
        
        <section class="input-section">
            <h1 class="input-section-header">Configure</h1>
            
                <input class="input-entry" placeholder="Nickname">
                <input class="input-entry" placeholder="New Password"> 
                <input class="input-entry" placeholder="Retype Password">
            
            <div class="control-panel">
                <button class="submit-button">Save</button>
            </div>
        </section>

    </div>
</main>

</div>
</body>

