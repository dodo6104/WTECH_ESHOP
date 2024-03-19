<template>
    <div class="GameContainer">
        <section class="FirstSection">
            <GamePicture picture-url = "https://upload.wikimedia.org/wikipedia/en/5/5f/Dishonored_2_cover_art.jpg" />
            <div class="GameInfoContainer">
                <GameInfo 
                :platforms="['PC', 'Xbox One', 'PS4']"

                name-of-the-game="Dishonored 2" 
                text-of-description="Dishonored 2 is set 15 years after the Lord Regent has been vanquished and the dreaded Rat Plague has passed into history. An otherworldly usurper has seized Empress Emily Kaldwin’s throne, leaving the fate of the Isles hanging in the balance. As Emily or Corvo, travel beyond the legendary streets of Dunwall to Karnaca, the once-dazzling coastal city that holds the keys to restoring Emily to power. Armed with the Mark of the Outsider and powerful new abilities, track down your enemies and take back what’s rightfully yours." 
                />
                <ShoppingPanel old-price-value = "30" new-price-value = "25"/>
            </div>
        </section>
        <section class="SecondSection">
            <GameVideo video-url="366P5JjdO0g" />
            <SystemRequirements />
        </section>
    </div>
  </template>
  
<script>
import GameInfo from '../components/GameView/SiteGameInfo.vue';
import GamePicture from '../components/GameView/SiteGamePicture.vue';
import GameVideo from '../components/GameView/SiteGameVideo.vue';
import SystemRequirements from '../components/GameView/SiteSystemRequirements.vue';
import ShoppingPanel from '../components/GameView/SiteShoppingPanel.vue';


export default {
name: 'SiteGameInfo',
components: {
    GameInfo,
    GamePicture,
    GameVideo,
    SystemRequirements,
    ShoppingPanel
},
}
</script>
  
  <style>
.GameContainer {
    width: 100%;
    display: grid;
}

.FirstSection, .SecondSection {
    display: flex;
    flex-wrap: wrap; 
    justify-content: center; 
    margin-top: 40px;
}



.SecondSection {
    margin-right: 20px;
}

</style>
  
  