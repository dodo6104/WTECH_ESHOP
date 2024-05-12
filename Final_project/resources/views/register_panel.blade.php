<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Registrácia</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            border: 1px solid #000;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
   
        button:hover {
            background-color: #333;
        }

        .input-form{
            text-align: center;
            margin: 30px;
        }

        .main-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: 100%;
            
        }

        .submit-button{
            margin-top: 5px;
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="main-container">

        @include('header')
        
        <form class='input-form' action="/register" method="post">
            @csrf
            <h1>Registrácia</h1>
            <input type="email" placeholder="Email" id="email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Retype Password" name="password_confirmation" required>
            <a href="/login">Login</a>
            <button class='submit-button' type="submit">Register</button>
        </form>

        @include("footer")
    </div>
</body>
</html>
