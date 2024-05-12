<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
    <button type="button" onclick="window.location.href='/'" >
      <div class="navbar-brand"><h1 class="navbar-brand-h1"> GamingSpot</h1> <h1><span class="short">GS</span></h1></div>
    </button>
    <div class="navbar-menu">
      <button class="platformButton" onclick="togglePlatforms()">
        <div class="navbar-item" >Platforms ▽</div>
      </button>
      <button class="genresButton"  onclick="toggleGenres()">
        <div class="navbar-item">Genres ▽</div>
      </button>
    </div>
    <form id="search-form" action="/search" method="GET">
      <div class="navbar-search">
        <input type="text" name="text" placeholder="Search" required>
        <button type="submit" id="SearchMagnifyingGlass">
          <img src="{{ asset('icons/search.png') }}" alt="Search" />
        </button>
      </div>
    </form>
    <div class="navbar-icons">
      <button type="button" onclick="window.location.href='/account'">
        <img src="{{ asset('/icons/user.png') }}"alt="Account" />
      </button>
      <button type="button" onclick="window.location.href='/cart'">
        <img src="{{ asset('icons/shopping-cart.gif') }}" alt="Cart" />
      </button>
    </div>
  </nav>
  <div id="genres-section" style="display: none;">
    @include('genres')
  </div>
  <div id="platforms-section" style="display: none;">
    @include('platforms')
  </div>
</body>

<style >

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  font: 21px 'Roboto', sans-serif;
  background-color: #003366;
  height: 110px;
}

button {
  background-color: transparent;
  border: none;
}

.navbar-brand {
  font-family: 'Roboto', sans-serif;
  font-size: 40px;
  align-items: center;
  padding-left: 20px;
  cursor: pointer;
  color: white;
}

#genres-section {
  position: absolute;
  display: none;
  z-index: 1000;
  width: 800px
}
#platforms-section {
  position: absolute;
  display: none;
  z-index: 1000;
  width: 800px
}

.navbar-brand h1 {
  font-size: 40px;
}
.navbar-brand .short{
  display: none;
}
.navbar-menu {
  display: flex;
  font: 21px 'Roboto', sans-serif;
  align-items: center;
} 

.navbar-menu button {
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  color: white;
}
    
.navbar-item {
  font: 21px 'Roboto', sans-serif;
  display: flex;
  width: 120px;
  text-align: center;
  justify-content: center;
  align-items: center;
  min-height: 110px;
}
  
.navbar-search {
  display: flex;  
  align-items: center;
  border-radius: 20px;
  background-color: #FFFFFF;
  height: 37px;
}

.navbar-search input {
  width: 180px;
  background-color: transparent;
  border: none;
  font-size: 21px;
  padding: 20px
}
  
.navbar-search input:focus {
  outline: none;
}

.navbar-search img {
  width: 28px; 
  height: auto; 
}



.navbar-icons {
  padding-right: 20px;
}

.navbar-icons button {
  background-color: transparent;
  margin-left: 10px; 
}

.navbar-icons img {
  width: 40px; 
  height: auto;
}

.navbar-icons button:hover {
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
}
  
.navbar-icons button img:hover {
  opacity: 0.8; 
}



@media (max-width: 1091px) {
  .navbar {
    justify-content: flex-start;
  }
  
  .navbar-menu {
    margin-left: auto; 
    margin-right: 3%;
    margin-right: 0px; 
  }
}

@media (max-width: 782px) {
  .navbar-menu {
    display: flex; 
    flex-direction: column;
    height: 100%;
    justify-content: center;
  }
  .navbar-icons button {
    margin-left: 0px; 
  }
  .navbar-item {
    text-align: right;
    min-height: 0px;
  }
}

@media (max-width: 756px) {
  .navbar-icons {
  padding-right: 0px;
}

  .navbar-icons button {
    margin-left: 0px; 
}
.navbar-item {
  margin-right: 0px; 
  text-align: right;
  margin-right: 20px;
  min-height: 0px;
}
}
@media (max-width: 600px) {
  .navbar-brand-h1 {
    display: none;
  }
  .navbar-brand .short{
    display: inline;
}
  .navbar-item {
    min-height: 0px;
  }
}
@media (max-width: 400px) {
  .navbar-brand-h1 {
    display: none;
  }
  .navbar-brand .short{
    display: none;
  }
  
  .navbar-search input {
    width: 100px;
  }
}
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(event) {
        var genresSection = document.getElementById('genres-section');
        var platformsSection = document.getElementById('platforms-section');
        var genresButton = document.querySelector('.genresButton');
        var platformButton = document.querySelector('.platformButton');

        if (!genresButton.contains(event.target) && !genresSection.contains(event.target) && genresSection.style.display === 'block') {
            genresSection.style.display = 'none';
        }
        if (!platformButton.contains(event.target) && !platformsSection.contains(event.target) && platformsSection.style.display === 'block') {
            platformsSection.style.display = 'none';
        }
    });
});


  function toggleGenres() {
    var button = document.querySelector('.genresButton');
    var rect = button.getBoundingClientRect();
    var position = {
        x: rect.left, 
        y: rect.top   
    };

    var buttonWidth = button.offsetWidth;

    var section = document.getElementById('genres-section');
    if (section.style.display === 'none') {
        section.style.display = 'block';
        var sectionWidth = section.offsetWidth;  // Získaj šírku sekcie 'genres-section'
        section.style.left = (position.x - sectionWidth / 2) + buttonWidth / 2  + 'px'; // Uprav túto časť pre posun vľavo
    } else {  
        section.style.display = 'none';
    }
  } 

  function togglePlatforms() {
    var button = document.querySelector('.platformButton');
    var rect = button.getBoundingClientRect();
    var position = {
        x: rect.left, 
        y: rect.top   
    };

    var buttonWidth = button.offsetWidth;

    var section = document.getElementById('platforms-section');
    if (section.style.display === 'none') {
        section.style.display = 'block';
        var sectionWidth = section.offsetWidth;  // Získaj šírku sekcie 'genres-section'
        section.style.left = (position.x - sectionWidth / 2) + buttonWidth / 2  + 'px'; // Uprav túto časť pre posun vľavo
    } else {  
        section.style.display = 'none';
    }
  }
  </script>

</html>