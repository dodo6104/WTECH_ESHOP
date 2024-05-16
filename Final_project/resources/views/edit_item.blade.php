<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridaj/Edituj položku</title>
    <script>
        function validateImages() {
            var images = document.getElementById('images').files;
            if (images.length < 2) {
                alert('Prosím, nahrajte minimálne dva obrázky.');
                return false;
            }
            return true;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .admin-title {
            text-align: center;
            color: #444;
        }
        .formular-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .formular {
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
        }
        .formular label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .formular input[type="text"],
        .formular input[type="number"],
        .formular input[type="date"],
        .formular textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .formular input[type="file"] {
            margin-bottom: 15px;
        }
        .formular textarea {
            height: 200px;
        }
        .formular fieldset {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .formular legend {
            font-weight: bold;
        }
        .formular button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .formular button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    @include('header')
    <div class="container">
        <h1 class="admin-title">Admin panel</h1>
        <div class="formular-wrapper">
            <form class="formular" onsubmit="return validateImages()" action="/adminpanel/processgameform" method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($game))
                    <input type="hidden" id="game_id" name="game_id" value="{{$game->id}}">
                @endif

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$game->name ?? ''}}" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required>{{$game->description ?? ''}}</textarea>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" value="{{$game->price ?? ''}}" required>

                <label for="discount">Discount (%):</label>
                <input type="number" id="discount" name="discount" value="{{$game->discount ?? 0}}" step="0.01">

                <label for="key_amount">Key amount:</label>
                <input type="number" id="key_amount" name="key_amount" value="{{$game->key_amount ?? 0}}">

                <label for="developer">Developer:</label>
                <input type="text" id="developer" name="developer" value="{{$game->developer ?? ''}}" required>

                <label for="release_date">Release date:</label>
                <input type="date" id="release_date" name="release_date" value="{{$formattedDate ?? ''}}" required>

                <label for="video_link">Trailer link:</label>
                <input type="text" id="video_link" name="video_link" value="{{$game->video_link ?? ''}}" required>

                <label for="images">Images:</label>
                <input type="file" id="images" name="images[]" multiple required>

                <fieldset>
                    <legend>Genres:</legend>
                    @foreach ($genres as $genre)
                        <input type="checkbox" name="genres[]" id="genre{{ $genre->id }}" value="{{ $genre->id }}"
                               {{ in_array($genre->id, $assignedGenreIds->toArray()) ? 'checked' : '' }}>
                        <label for="genre{{ $genre->id }}">{{ $genre->name }}</label><br>
                    @endforeach
                </fieldset>

                <fieldset>
                    <legend>Platforms:</legend>
                    @foreach ($platforms as $platform)
                        <input type="checkbox" name="platforms[]" id="platform{{ $platform->id }}" value="{{ $platform->id }}"
                               {{ in_array($platform->id, $assignedPlatformIds->toArray()) ? 'checked' : '' }}>
                        <label for="platform{{ $platform->id }}">{{ $platform->name }}</label><br>
                    @endforeach
                </fieldset>

                <button type="submit">{{ isset($game) ? 'Aktualizovať' : 'Pridať' }} položku</button>
            </form>
        </div>
    </div>
    @include('footer')
</body>
</html>
