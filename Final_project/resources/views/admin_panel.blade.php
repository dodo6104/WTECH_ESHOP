<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header, footer {
            width: 100%; /* Plná šírka pre hlavičku a pätičku */
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Zarovnanie tlačidiel na stred */
            margin-top: 20px; /* Odstup od hlavičky */
        }

        .button-container button {
            width: 250px; /* Rovnaká šírka pre všetky tlačidlá */
            background-color: #4CAF50; /* Zelená farba pozadia */
            color: white; /* Biela farba textu */
            padding: 10px; /* Odstup tlačidla od okraja */
            font-size: 24px; /* Veľkosť písma */
            border: none; /* Bez okrajov */
            cursor: pointer; /* Zmena kurzora na ruku pri najazde */
            border-radius: 5px; /* Zaoblené rohy */
            margin: 5px; /* Odstup medzi tlačidlami */
        }

        #editGameBtn {
            background-color: #f44336; /* Červená farba pozadia */
        }

        h1 {
            margin-top: 20px; /* Odstup nadpisu od hlavičky */
        }
    </style>
</head>
<body>
    @include('header') 
    <h1>Admin panel</h1>
    <div class="button-container">
        <button id="addGameBtn" onclick="window.location.href='/adminpanel/addgame'">Add Game</button>
        <button id="editGameBtn" onclick="window.location.href='/adminpanel/editgame'">Edit Items</button>
    </div>
    @include('footer') 
</body>
</html>
