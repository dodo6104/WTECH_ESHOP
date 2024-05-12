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
</head>
<body>
    @include('header') 
    <h1>Admin panel</h1>
<form onsubmit="return validateImages()" action="/adminpanel/processgameform" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($game))
        <input type="hidden" id="game_id" name="game_id" value="{{$game->id}}">
    @endif

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$game->name ?? ''}}" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required>{{$game->description ?? ''}}</textarea><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" value="{{$game->price ?? ''}}" required><br><br>

    <label for="discount">Discount (%):</label>
    <input type="number" id="discount" name="discount" value="{{$game->discount ?? 0}}" step="0.01"><br><br>

    <label for="key_amount">Key amount:</label>
    <input type="number" id="key_amount" name="key_amount" value="{{$game->key_amount ?? 0}}"><br><br>

    <label for="developer">Developer:</label>
    <input type="text" id="developer" name="developer" value="{{$game->developer ?? ''}}" required><br><br>

    <label for="release_date">Release date:</label>
    <input type="date" id="release_date" name="release_date" value="{{$formattedDate ?? ''}}" required><br><br>

    <label for="video_link">Trailer link:</label>
    <input type="text" id="video_link" name="video_link" value="{{$game->video_link ?? ''}}" required><br><br>

    <label for="images">Images:</label>
    <input type="file" id="images" name="images[]" multiple required><br><br>

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
@include('footer') 
</body>
</html>

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
</style>
