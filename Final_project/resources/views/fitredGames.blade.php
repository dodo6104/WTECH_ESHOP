<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    @include('header')      
    <section class="Section">
        <div class="sorting-elements">
            <div class="sort-buttons">
                <button class="button-filter" onclick="bestSelling()" >Best-Selling</button>
                <button class="button-filter" onclick="cheapest()" >The Cheapest</button>
                <button class="button-filter" onclick="mostExpensive()" >The Most Expensive</button>
                <button class="button-filter" onclick="theLatest()" >The Latest</button>
            </div>
            <form class="price-sorting">
                <label>Cena (€): </label>
                <input type="number" id="price-min" name="price-min" min="0" placeholder="FROM">
                <input type="number" id="price-max" name="price-max" min="0" placeholder="TO">
                <button type="button" onclick="submitPriceRange()">OK</button>
            </form>
        </div>
        <div class="product-grid">
            @foreach ($games as $game)
            <div class="card" onclick="redirectToGame('{{ $game->id }}')">
                <div class="image-placeholder">
                    <img src="{{ asset('images/games/' . $game->name . '/1.jpeg') }}" alt="Description of Image" width="250" height="250">
                            @if ($game->discount > 0)
                        <div class="discount-tag">-{{ $game->discount }}%</div>
                    @endif
                </div>
                <div class="game-info">
                    <h2 class="game-name">{{ $game->name }}</h2>
                    <p class="platform">{{ $game->platform }}</p>
                    @if ($game->discount > 0)
                        <p class="price"> <s><span class="original-price">{{ $game->price }} €</s></span> <br> <span class="discounted-price">{{ number_format($game->price * (1 - $game->discount / 100), 2) }} €</span></p>
                    @else
                        <p class="price">{{ $game->price }} €</p>
                    @endif
                    <button class="add-to-cart" onclick="event.stopPropagation(); addToCart('{{ $game->id }}', event)">Add to Cart</button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="pagination-section">
        <div class="pagination">
            @for ($i = 1; $i <= $totalPages; $i++)
                <button class="page-btn" onclick="redirectToPage({{ $i }})">{{ $i }}</button>
            @endfor
        </div>
    </section>
    
    @include('footer')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        let sortMethod = params.get('sort');
        console.log("Aktuálne triedenie: " + (sortMethod ? sortMethod : "Nešpecifikované"));
    });
    function submitPriceRange() {
        let minPrice = document.getElementById('price-min').value;
        let maxPrice = document.getElementById('price-max').value;

        if (minPrice && maxPrice && parseInt(minPrice) >= parseInt(maxPrice)) {
            return;
        }

        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);

        if (minPrice) {
            params.set('priceMin', minPrice);
        } else {
            params.delete('priceMin');
        }

        if (maxPrice) {
            params.set('priceMax', maxPrice);
        } else {
            params.delete('priceMax');
        }

        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }


    function bestSelling() {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        params.set('sort', 'bestSelling');
        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }

    function cheapest() {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        params.set('sort', 'cheapest');
        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }

    function mostExpensive() {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        params.set('sort', 'mostExpensive');
        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }

    function theLatest() {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        params.set('sort', 'theLatest');
        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }

    function redirectToGame(gameId) {
        window.location.href = `/game/${gameId}`;
    }
    
    function addToCart(gameId, event) {
        event.stopPropagation();
        window.location.href = `/cart/add/${gameId}`;
    }

    function redirectToPage(pageNumber) {
        let currentUrl = new URL(window.location.href);
        let params = new URLSearchParams(currentUrl.search);
        params.set('page', pageNumber); 
        currentUrl.search = params.toString();
        window.location.href = currentUrl.toString();
    }

    </script>
    

<style>
html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}

.Section {
  display: grid;
}

.sorting-elements {
  display: grid;
  width: 100%;
  font-size: 35px;
  font-weight: bold;
  align-items: center;
  border: solid black; 
  padding-left: 20px;
}

.product-grid { 
    margin-top: 40px;
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 40px;
    justify-content: center; 
}

.card {
cursor: pointer; 
border: 1px solid #ccc; 
  width: 250px;
  border: 1px solid #000;
  text-align: center;
}

.image-placeholder {
    position: relative;
    width: 250px;
    height: 250px;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.discount-tag {
    position: absolute;
    top: 0;
    right: 0;
    background-color: red;
    color: white;
    font-size: 16px;
    font-weight: bold;
    width: 60px;
    height: 60px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center; 
}

.game-info {
  padding: 0 20px 20px;
}

.game-name {
  margin: 10px 0;
}

.platform, .price {
  color: #555;
  margin: 5px 0;
}

.add-to-cart {
  background-color: #a1c900;
  color: black;
  border: none;
  padding: 10px 20px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-weight: bold;
  width: 200px;
  height: 50px;
  border-radius: 20px;
  font-size: 23px;
}

.add-to-cart:hover {
  background-color: rgb(205, 239, 68);
  }

.sort-buttons {
        display: flex;
        justify-content: space-between;
        margin: 20px auto;
        padding: 10px;
    }
.button-filter {
    padding: 10px 20px;
    background-color: #e0e0e0;
    border: none;
    cursor: pointer;
    margin-left: 20px;
    font-size: 20px;
    width: 200px;
}
.button-filter:hover {
    background-color: #d0d0d0;
}

.button-filter.active {
    background-color: #a1c900; /* Zelená farba pre aktívne tlačidlo */
    color: white;
}

.price-sorting {
    display: flex;
    justify-content: space-between;
    margin: 0px auto;
    margin-bottom: 30px; 
    }

.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.page-btn {
    padding: 10px 15px;
    margin: 0 5px;
    background-color: #f0f0f0;
    border: 1px solid #d0d0d0;
    cursor: pointer;
}
.page-btn:hover {
    background-color: #e0e0e0;
}
  
@media (max-width: 920px) {
  .product-grid { 
    grid-template-columns: auto auto;
  }
}

@media (max-width: 630px) {
  .product-grid { 
    grid-template-columns: none;
    padding: 0px 0px 0px 0px;
  }
}
</style>
</html>