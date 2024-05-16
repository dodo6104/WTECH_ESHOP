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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .adminH1 {
            text-align: center;
            color: #444;
        }
        .formular-wrapper {
            display: flex;
            justify-content: center;
        }
        .formular {
            width: 100%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
        }
        .adminLabels {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .adminIntput,
        .adminIntput,
        .adminIntput,
        .textDesc {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }

        .textDesc {
            height: 200px;
        }

        .adminInputs {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .categories {
            font-weight: bold;
        }
        .SubButton {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .SubButton:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    @include('header')
    <div class="container">
        <h1 class = "adminH1">Admin panel</h1>
        <div class="formular-wrapper">
            <form class="formular" method="post" enctype="multipart/form-data" onsubmit="return validateImages()">
                @csrf
                <label class = "adminLabels" for="name">Name:</label>
                <input class="adminIntput" type="text" id="name" name="name" required>

                <label class = "adminLabels" for="description">Description:</label>
                <textarea id="description" name="description" required class="textDesc"></textarea>

                <label class = "adminLabels" for="price">Price:</label>
                <input class="adminIntput" type="number" id="price" name="price" step="0.01" required>

                <label class = "adminLabels" class = "adminLabels" for="discount">Discount (%):</label>
                <input class="adminIntput"  type="number" id="discount" name="discount" step="0.01">

                <label class = "adminLabels" for="key_amount">Key amount:</label>
                <input class="adminIntput" type="number" id="key_amount" name="key_amount">

                <label class = "adminLabels"for="developer">Developer:</label>
                <input class="adminIntput" type="text" id="developer" name="developer" required>

                <label class = "adminLabels" for="release_date">Release date:</label>
                <input class="adminIntput" type="date" id="release_date" name="release_date" required>

                <label class = "adminLabels" for="video_link">Trailer link:</label>
                <input class="adminIntput" type="text" id="video_link" name="video_link" required>

                <label class = "adminLabels" for="images">Images:</label>
                <input type="file" id="images" name="images[]" multiple required>

                <fieldset class="adminInputs">
                    <legend class="categories">Genres:</legend>
                    @foreach ($genres as $genre)
                        <input type="checkbox" name="genres[]" id="genre{{ $genre->id }}" value="{{ $genre->id }}">
                        <label class = "adminLabels" for="genre{{ $genre->id }}">{{ $genre->name }}</label><br>
                    @endforeach
                </fieldset>

                <fieldset class="adminInputs">
                    <legend class="categories">Platforms:</legend>
                    @foreach ($platforms as $platform)
                        <input type="checkbox" name="platforms[]" id="platform{{ $platform->id }}" value="{{ $platform->id }}">
                        <label class = "adminLabels" for="platform{{ $platform->id }}">{{ $platform->name }}</label><br>
                    @endforeach
                </fieldset>

                <button class = "SubButton" type="submit">Pridať položku</button>
            </form>
        </div>
    </div>
</body>
</html>
