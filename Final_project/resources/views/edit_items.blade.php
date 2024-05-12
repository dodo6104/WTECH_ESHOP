<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Games</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%; /* Aby zaberá hlavička celú šírku */
        }

        .content {
            width: 100%;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .game-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 500px;
            border: 1px solid black;
            margin-bottom: 20px;
            padding: 10px;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    @include('header') 
    <h1>Admin panel</h1>
    <div class="content">     
        <ul>
            @foreach ($games as $game)
                <li class="game-container">
                    <h2>{{ $game->name }}</h2>
                    <div class="buttons">
                        <button><a href="{{ url('/adminpanel/editgame/'.$game->id) }}">Edit</a></button>
                        <button><a href="{{ url('/adminpanel/deletegame/'.$game->id) }}">Remove</a></button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
