<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game->name }}</title>
</head>
<body>
@include('header') 
<div class="GameContainer">
        <section class="FirstSection">
            
            <div class="GamePicture">
                <div class="GameImageContainer">
                    <img src="{{ asset('images/games/' . $game->name . '/1.jpeg') }}" alt="Description of Image">
                </div>                
            </div>
            
            
            <div class="GameInfoContainer">
                
                <h1 class = "GameName">{{ $game->name }}</h1>
                <div class="DescriptionContainer">
                {{ $game->description }}
                </div>

                <div class="star-rating" >
                    <div class="star-background">★★★★★</div>
                    <div class="star-foreground" style="width: {{ $game->averageRating }}%;">★★★★★</div>
                </div>
                
                <div class="ShoppingPanel">
                    <div class="LeftSection">
                            <div class="price-section">
                            <div class="Price">
                                <div class="Price-Value">{{ $game->discountedPrice }} $</div>
                                <div class="Old-Price-Value" data-discount={{ $game->discount }}><del>{{ $game->price }} $</del></div>
                            </div>
                            <div class="Discount" data-discount={{ $game->discount }}>
                            -{{ $game->discount }} %
                            </div>
                            </div>
                    </div>
                    <div class="RigthSection">
                        <div class="NameSelectors">Platform</div>
                        <select class="Selector" id="platform">
                            <option >Steam, Epic Games</option>
                        </select>
                        <div class="AddButtonContainer" onclick="window.location.href='/cart/add/{{$game->id}}'"><button class="AddToCartButton">Add to Cart</button></div>
                    </div>
                </div>
            </div>
    
        </section>
        <section class="SecondSection">
            <div class="VideoContainer">
                <iframe width="550" height="310" src="{{$game->video_link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="categories">
                    @foreach ($game->genres as $genre)
                        <div  class='categories-element'>{{$genre}}</div>
                    @endforeach
            </div>
        </section>
        <section class="Thirdsection">
            <div class="AddRevieSection">
                <textarea class="AddReview" maxlength="500" v-model="text"></textarea>
                    <div class="CounterAndButtonSection">
                    <div>0/500</div>
                    <div class="AddReviewInStars">
                    <div class="star-rating" >
                        <div class="star-background">★★★★★</div>
                        <div class="star-foreground">★★★★★</div>
                    </div>
                    <button class="AddRevieButton">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="Reviews">
                <h2>Reviews</h2> 
                    @forelse($reviews as $review)
                        <div class="review">
                            <div class="UsernameAndStars">
                                <div class="star-rating-user">
                                    <div class="star-background-user">★★★★★</div>
                                    <div class="star-foreground-user" style="width: {{ ($review->rating / 5) * 100 }}%;">★★★★★</div>
                                </div>
                                <div class="username">
                                    {{ $review->user->name ?? 'Anonymous' . $review->account_ID  }} 
                                </div>
                            </div>
                            <div class="review-text">{{ $review->text }}</div>
                        </div>
                    @empty
                        <p>No reviews yet.</p>
                    @endforelse
            </div>
        </section>
    </div>
</body>
</html>

<style>
html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}

.GameContainer {
    display: flex;
    flex-direction: column; 
    align-items: center; 
    width: 100%;
}

.FirstSection, .SecondSection {
    width: 80%;
    max-width: 970px; 
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
}

.GamePicture{
    padding-right: 2%;
}

.StarRatingMin {
    display: none;
}

.ShoppingPanel {
    display: flex;
    max-width: 650px;
    justify-content: space-between;
}

.LeftSection {
    display: block;
    padding-right: 10px;
}

.NameSelectors {
    font-size: 13px;
    color: rgba(0, 0, 0, 0.5);
    margin-top: 5px;
}

.Selector {
    width: 250px;
    height: 38px;
    margin-bottom: 5px;
}

.price-section {
    display: flex;
    gap: 20px
}

.Price-Value {
    font-size: 30px;
    font-weight: bold;
}

.Old-Price-Value {
    font-size: 16px;
}

.Price .Old-Price-Value[data-discount="0"],
.Discount[data-discount="0"] {
  display: none;
}

.Discount {
    display: flex;
    align-items: center;
    font-size: 32px;
    font-weight: bold;
}

.RigthSection {
    display: block;
}

.AddButtonContainer {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.AddToCartButton {
    width: 250px;
    height: 50px;
    background-color: #a1c900;
    border-radius: 10px;
    font-size: 40px;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;

    cursor: pointer;
    transition: background-color 0.5s ease;
}

.AddToCartButton:hover {
    background-color: rgb(205, 239, 68);
}

.Firstvideo {
    padding-right: 20px;
}

.Secondvideo {
    display: none;
}

.Thirdsection {
    width: 80%;
    max-width: 970px; 
    margin-top: 40px;
}

.Reviews {
    background-color: #f4f4f4;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 5px 20px 5px 20px;
    background: linear-gradient(to bottom, #ffffff, #f7f7f7);
    margin-top: 20px;
}

.Reviews h2 {
    padding-bottom: 1%;
}

.ReviewComp {
    margin-bottom: 3%;
}

.Numberring {
    text-align: center;
}

.Reviews button{
    cursor: pointer;
}

.GameName {
    margin: 0;
    font-size: 24px;
}

.DescriptionContainer {
    max-width: 650px; /* Môže byť upravené podľa potreby */
    font-size: 14px;
    line-height: 1.5;
    text-align: justify;
}


.star-rating {
    position: relative;
    display: inline-block;
    font-size: 3.5rem;
}

.star-foreground {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    color: goldenrod;
    white-space: nowrap;
}

.AddRevieSection{
    display: flex;
    flex-direction: column;

}
.CounterAndButtonSection {
    display: flex;
    justify-content: space-between;
}

.AddReviewInStars {
    display: flex;
    padding-right: 20px;
}

.AddRevieButton {
    border-radius: 20px;
    height: 60px;
    background-color: rgb(0, 0, 0);
    color: white;
    font-weight: bold;
    font-size: 24px;
    font-family: 'Roboto', sans-serif;
    cursor: pointer;
    transition: background-color 0.5s ease;
}

.AddRevieButton:hover {
    background-color: rgb(0, 0, 0, 0.8);;
}

textarea.AddReview {
    width: calc(100% - 20px);
    height: 100px;
    resize: none;
    overflow-y: auto;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.5;
    padding: 10px; 
}

.AddReviewInStars {
    display: grid;
}

.star-rating-user {
    position: relative;
    display: inline-block;
    font-size: 24px;
}

.star-foreground-user {
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
    width: 100%;
    color: goldenrod;
    white-space: nowrap;
}

.review {
    text-align: justify;
    line-height: 1.5;
    font-size: 14px;
    padding-bottom: 2%;
    border: 1px solid #dddddd; 
    background-color: #f9f9f9;
    border-radius: 8px; 
    box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
    padding: 10px;
    margin-bottom: 20px 
}

.username {
    font-weight: bold;
    margin-right: 2%;
    font-size: 16px;
    margin-bottom: 10px;
    border-bottom: 1px solid black;
}

.categories {
    display: grid;
    margin-left: 20px; 
    grid-template-rows: 1fr 1fr 1fr;  /* Definuje, že mriežka má tri riadky */
    grid-gap: 10px;
    width: 100%; /* Zabezpečí, že .categories zaberá celú šírku rodičovského kontajnera */
}



.categories-element {
background-color: #f2f2f2;  /* Farba pozadia pre každú položku */
  border: 1px solid #ccc;  /* Rámček okolo každej položky */
  padding: 20px;  /* Vnútorný odstup */
  text-align: center;
  height: 20px;
  width: 120px;
}

.Discount{
    color: red;
}

@media (max-width: 975px) {
    .FirstSection, .SecondSection, .Thirdsection {
        margin-top: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .GameInfoContainer {
        margin-top: 20px;
    }
    .SystemRequirements {
        margin-top: 2%;
    }
    .Firstvideo {
    padding-right: 0px;
    }
}

@media (max-width: 600px) {
    .ShoppingPanel {
        display: flex; 
        justify-content: center; 
        align-items: center;
        flex-direction: column;
    }
    .StarRatingMin {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center; 

    }
    .StarRatingMax {
        display: none;
    }
    
    .Firstvideo {
        display: none;
    }

    .Secondvideo {
        display: inline;
    }
}
</style>