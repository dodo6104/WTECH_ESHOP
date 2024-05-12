<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Prihlásenie</title>
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
        .input-form {
            width: 300px;
            border: 1px solid #000;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .email-input[type="email"], .password-input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .submit-button:hover {
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
            margin:
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

<div class='main-container'>

@include('header')

    <form class='input-form' action="/login" method="post">
        @csrf
        <h1>Login</h1>
        <input class = email-input type="email" placeholder="Email" id="email" name="email" required>
        <input class = password-input type="password" placeholder="Password" name="password" required>
        <a href="/register">Register</a>
        <button class='submit-button' type="submit">Login</button>
    </form>

@include('footer')
    </div>
</body>
</html>
