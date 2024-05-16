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
        <h1 class="Sections">Latest & Greatest</h1>
        <div class="product-grid">
            @foreach ($latestGames as $game)
            <div class="card" onclick="redirectToGame('{{ $game->id }}')">
                <div class="image-placeholder">
                    <img src="{{ asset('images/games/' . $game->name . '/1.webp') }}" alt="Game image" width="250" height="250">
                    @if ($game->discount > 0)
                        <div class="discount-tag">-{{ $game->discount }}%</div>
                    @endif
                </div>
                <div class="game-info">
                    <h2 class="game-name">{{ Str::limit($game->name, 15) }}</h2>
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

    <section class="Section">
        <h1 class="Sections">Bestsellers</h1>
        <div class="product-grid">
            @foreach ($bestSellingGames as $game)
            <div class="card" onclick="redirectToGame('{{ $game->id }}')">
                <div class="image-placeholder">
                    <img src="{{ asset('images/games/' . $game->name . '/1.webp') }}" alt="Game image" width="250" height="250">
                    @if ($game->discount > 0)
                        <div class="discount-tag">-{{ $game->discount }}%</div>
                    @endif
                </div>
                <div class="game-info">
                    <h2 class="game-name">{{ Str::limit($game->name, 15) }}</h2>
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

    <section class="Section">
        <h1 class="Sections">Mega Discounts</h1>
        <div class="product-grid">
            @foreach ($megaDiscountGames as $game)
            <div class="card"  onclick="redirectToGame('{{ $game->id }}')">
                <div class="image-placeholder">
                    <img src="{{ asset('images/games/' . $game->name . '/1.webp') }}" alt="Game image" width="250" height="250">
                    @if ($game->discount > 0)
                        <div class="discount-tag">-{{ $game->discount }}%</div>
                    @endif
                </div>
                <div class="game-info">
                    <h2 class="game-name">{{ Str::limit($game->name, 15) }}</h2>
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
    @include('footer')

</body>
<script>
function redirectToGame(gameId) {
    window.location.href = `/game/${gameId}`;
}

function addToCart(gameId) {
    event.stopPropagation();
    window.location.href = `/cart/add/${gameId}`;
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

.Sections {
  display: flex;
  width: 100%;
  height: 100px;
  font-size: 35px;
  font-weight: bold;
  align-items: center;
  border: solid black; 
  border-width: 0px 0 1px 0px;
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

.price {
    height: 30px;
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
