<!-- THIS FILE CAN BE REMOVED -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingSpot</title>

    <link rel="stylesheet" href="../styles/input_panel/input_panel.css">
    <link rel="stylesheet" href="../styles/buttons/submit_button.css">

    <style>

        /* by default this panel is hidden */
        #register-panel{
            display: none;
        }

        #email-entry{
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <!-- Log-in Panel Section -->

    <section id="log-in-panel" class="input-panel">
        <h1>Log in</h1>
        
        <div id="login-panel-entry-section" class="input-panel-entry-section">
            
     
            <input class="input-entry" type="email" placeholder="email">
  

            <div class="password-wrapper">
                <img id="login-panel-password-icon-1" class="icon" src="./assets/icons/show.png" alt="Show Password" onclick="togglePasswordVisibility(this)">
                <input id="login-panel-password-1" class="password-entry" type="password" placeholder="password">
            </div>
        </div>

        
        <div class="control-panel">
            <button class="submit-button">Proceed</button>
            <label class="to-prev-section-label" onclick="toggleSwitch('register-panel')">Register</label>
        </div>

    </section>


    <!-- Register Panel Section -->

    <section id="register-panel" class="input-panel">
        <h1>Register</h1>
        
        <div class="input-panel-entry-section">
            <input class="input-entry" type="email" placeholder="email">
            <div class="password-wrapper">
                <img id="register-panel-password-icon-1" class="icon" src="./assets/icons/show.png" alt="Show Password" onclick="togglePasswordVisibility(this)">
                <input id="register-panel-password-1" class="password-entry" type="password" placeholder="password">
            </div>
            <div class="password-wrapper">
                <img id="register-panel-password-icon-2" class="icon" src="./assets/icons/show.png" alt="Show Password" onclick="togglePasswordVisibility(this)">
                <input id="register-panel-password-2" class="password-entry" type="password" placeholder="retype password">
            </div>
        </div>

        <div class="control-panel">
            <button class="submit-button">Proceed</button>
            <label class="to-prev-section-label" onclick="toggleSwitch('log-in-panel')">Log in</label>
        </div>

    </section>
    @include('footer')


    <script src="../scripts/account_access_view/panel_switcher.js"></script>
</body>

</html>