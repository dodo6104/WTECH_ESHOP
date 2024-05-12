<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridaj položku</title>
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
    <form class="formular" method="post" enctype="multipart/form-data" onsubmit="return validateImages()">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="discount">Discount (%):</label>
        <input type="number" id="discount" name="discount" step="0.01"><br><br>

        <label for="key_amount">Key amount:</label>
        <input type="number" id="key_amount" name="key_amount"><br><br>

        <label for="developer">Developer:</label>
        <input type="text" id="developer" name="developer" required><br><br>

        <label for="release_date">Release date:</label>
        <input type="date" id="release_date" name="release_date" required><br><br>

        <label for="video_link">Trailer link:</label>
        <input type="text" id="video_link" name="video_link" required><br><br>

        <label for="images">Images:</label>
        <input type="file" id="images" name="images[]" multiple required><br><br>

        <fieldset>
            <legend>Genres:</legend>
            @foreach ($genres as $genre)
                <input type="checkbox" name="genres[]" id="genre{{ $genre->id }}" value="{{ $genre->id }}">
                <label for="genre{{ $genre->id }}">{{ $genre->name }}</label><br>
            @endforeach
        </fieldset>

        <fieldset>
            <legend>Platforms:</legend>
            @foreach ($platforms as $platform)
                <input type="checkbox" name="platforms[]" id="platform{{ $platform->id }}" value="{{ $platform->id }}">
                <label for="platform{{ $platform->id }}">{{ $platform->name }}</label><br>
            @endforeach
        </fieldset>

        <button type="submit">Pridať položku</button>
    </form>
</body>
</html>

<style>
    html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
.formular {
    margin-top: 20px; 
}
</style>
