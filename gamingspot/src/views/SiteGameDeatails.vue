<template>
    <div class="GameContainer">
        <section class="FirstSection">
            <GamePicture picture-url = "https://upload.wikimedia.org/wikipedia/en/5/5f/Dishonored_2_cover_art.jpg" class="GamePicture"/>
            <div class="GameInfoContainer">
                <GameInfo 
                :platforms="['PC', 'Xbox One', 'PS4']"

                name-of-the-game="Dishonored 2" 
                text-of-description="Dishonored 2 is set 15 years after the Lord Regent has been vanquished and the dreaded Rat Plague has passed into history. An otherworldly usurper has seized Empress Emily Kaldwin’s throne, leaving the fate of the Isles hanging in the balance. As Emily or Corvo, travel beyond the legendary streets of Dunwall to Karnaca, the once-dazzling coastal city that holds the keys to restoring Emily to power. Armed with the Mark of the Outsider and powerful new abilities, track down your enemies and take back what’s rightfully yours." 
                />
                <ShoppingPanel old-price-value = "30" new-price-value = "25"/>
                <StarRating  :rating="50" :ratingfont="'3.5rem'"/>
            </div>
        </section>
        <section class="SecondSection">
            <GameVideo video-url="366P5JjdO0g" class="VideoTrailer"/>
            <SystemRequirements class = "SystemRequirements"/>
        </section>
        <section class="Thirdsection">
            <div class="Reviews">
                <h2>Reviews</h2> 
                <Review class="ReviewComp"/>
                <Review class="ReviewComp"/>
                <Review class="ReviewComp"/>
                <Review class="ReviewComp"/>
                <div class="Numberring">
                    <button><b><u>1</u></b></button> <button>2</button> <button>3</button> <button>4</button> <button>5</button>
                </div>
            </div>
        </section>
    </div>
  </template>
  
<script>
import GameInfo from '../components/GameView/SiteGameInfo.vue';
import GamePicture from '../components/GameView/SiteGamePicture.vue';
import GameVideo from '../components/GameView/SiteGameVideo.vue';
import SystemRequirements from '../components/GameView/SiteSystemRequirements.vue';
import ShoppingPanel from '../components/GameView/SiteShoppingPanel.vue';
import StarRating from '../components/GameView/SiteStarRating.vue';
import Review from '../components/GameView/SiteReview.vue';




export default {
name: 'SiteGameInfo',
components: {
    GameInfo,
    GamePicture,
    GameVideo,
    SystemRequirements,
    ShoppingPanel,
    StarRating,
    Review
},
}
</script>
  
  <style>
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

.VideoTrailer {
    padding-right: 20px;
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

@media (max-width: 975px) {
    .FirstSection, .SecondSection, .Thirdsection {
        flex-wrap: wrap;
        justify-content: center;
    }
    .SystemRequirements {
        margin-top: 2%;
    }


}

</style>
  
  