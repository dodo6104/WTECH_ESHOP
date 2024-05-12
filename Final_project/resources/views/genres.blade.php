<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .PlatformMenu {
            position: absolute;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: auto auto auto;
            border-radius: 0px 0px 20px 20px;
            background-color: #003366dc;
            z-index: 5;
            padding: 20px;
            width: 800px
        }

        .AllSections {
            display: grid;
            grid-gap: 20px;
        }

        .OptionsForPlatforms {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .genre-button {
          padding: 15px 30px; /* Zväčšený padding pre väčšie tlačidlá */
          border: none;
          border-radius: 5px;
          background-color: #337ab7; /* Modrá */
          color: white;
          font-size: 18px; /* Väčší text pre lepšiu čitateľnosť */
          cursor: pointer;
          transition: background-color 0.3s ease;
        }

        .genre-button:hover, .genre-button.active {
            background-color: #286090; /* Tmavší odtieň modrej pre hover a aktívny stav */
        }

        .genre-button.active {
            background-color: black; 
        }

        .SearchButtonPlatform {
            padding: 15px 30px; /* Zväčšený padding pre tlačidlo vyhľadávania */
            margin-top: 20px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #008CBA; /* Modrá */
            color: white;
            font-size: 18px; /* Zväčšený text na tlačidle vyhľadávania */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .SearchButtonPlatform:hover {
            background-color: #007B9A; /* Tmavší odtieň modrej */
        }

    </style>
</head>
<body>
    <div class="PlatformMenu">
      <form id="genreForm" action="/search" method="GET">
          <div class="AllSections">
              <section>
                  <div class="OptionsForPlatforms">
                      @foreach ($genres as $genre)
                          <button type="button" class="genre-button" data-genre-id="{{ $genre->id }}">{{ $genre->name }}</button>
                      @endforeach
                  </div>
              </section>
          </div>
          <button type="button" class="SearchButtonPlatform">Search</button>
      </form>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const genreButtons = document.querySelectorAll('.genre-button');
        genreButtons.forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active'); // Prepína triedu 'active' na kliknuté tlačidlo
            });
        });

        const searchButton = document.querySelector('.SearchButtonPlatform');
        searchButton.addEventListener('click', function() {
            const activeGenres = document.querySelectorAll('.genre-button.active');
            const genreForm = document.getElementById('genreForm');
            let genresInput = '';
            activeGenres.forEach((btn, index) => {
                genresInput += `<input type="hidden" name="genres[]" value="${btn.getAttribute('data-genre-id')}">`;
            });
            genreForm.innerHTML += genresInput;
            genreForm.submit(); // Odošle formulár na server
        });
    });

    </script>
</body>
</html>
