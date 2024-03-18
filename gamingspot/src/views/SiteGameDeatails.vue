<template>
    <div class="GameContainer">
        <section class="FirstSection">
            <div class="GameImageContainer">
                <img src="https://upload.wikimedia.org/wikipedia/en/5/5f/Dishonored_2_cover_art.jpg" alt="Description of Image">
            </div>
            <div class="GameInfoContainer">
                <h1>Dishonored 2</h1>
                <div class="DescriptionContainer">
                    Dishonored 2 is set 15 years after the Lord Regent has been vanquished and the dreaded Rat Plague has passed into history. An otherworldly usurper has seized Empress Emily Kaldwin’s throne, leaving the fate of the Isles hanging in the balance. As Emily or Corvo, travel beyond the legendary streets of Dunwall to Karnaca, the once-dazzling coastal city that holds the keys to restoring Emily to power. Armed with the Mark of the Outsider and powerful new abilities, track down your enemies and take back what’s rightfully yours.
                </div>
                <div class="ShoppingPanel">
                    <div class="LeftSection">
                        <div class="NameSelectors">Type of game</div>
                        <select class = "Selector" id="type-of-game">
                            <option value="classic-key">Classic Key</option>
                        </select>
                        <div class="price-section">
                            <div class="Price">
                                <div class="Price-Value">25 $</div>
                                <div class="Old-Price-Value">30 $</div>
                            </div>
                            <div class="Discount">-XX%</div>
                        </div>
                    </div>
                    <div class="RigthSection">
                        <div class="NameSelectors">Platform</div>
                        <select class = "Selector" id="platform">
                            <option value="steam">Steam</option>
                        </select>
                        <div class="AddButtonContainer"><button class="AddToCartButton">Add to Cart</button></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="SecondSection">
            <div class="VideoContainer">
                <iframe width="600" height="310" src="https://www.youtube.com/embed/366P5JjdO0g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="RequirementsContainer">
                <div class="requirements">
                    <h2>Minimum System Requirements</h2>
                    <ul>
                        <li><label>RAM:</label> 8GB</li>
                        <li><label>Processor:</label> Intel Core i5 or better</li>
                        <li><label>Graphics Card:</label> NVIDIA GTX 660 or better</li>
                        <li><label>Operating System:</label> Windows 10, 64-bit</li>
                        <li><label>Hard Drive:</label> 250GB SSD</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
  </template>
  
  <script>
  // ... Your script stays the same ...
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

.GameImageContainer, .DescriptionContainer {
    flex: 0 0 auto;
}

.GameImageContainer {
    display: flex;
    max-width: 350px;
    max-height: 350px;
    margin-right: 20px;
}

.GameInfoContainer h1 {
    margin: 0;
}

.DescriptionContainer {
    width: 650px; /* Môže byť upravené podľa potreby */
    height: 150px;
    padding: 5px;
    font-size: 14px;
    line-height: 1.5;
    text-align: justify;
}

.ShoppingPanel {
    display: flex;
    width: 100%; /* Rozťahuje panel na celú dostupnú šírku */
    justify-content: space-between;
}

.LeftSection {
    display: block;
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
    font-size: 24px;
    font-weight: bold;
}

.Old-Price-Value {
    font-size: 16px;
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
}

.AddToCartButton {
    width: 200px;
    height: 40px;
    background-color: grey;
    border-radius: 20px;
    font-size: 28px;
    font-weight: bold;
}

.SecondSection {
    margin-right: 20px;
}

.VideoContainer {
    margin-right: 20px;
}

.RequirementsContainer {
    width: 350px;
    height: 360px;    
}
.RequirementsContainer {
    display: flex;
    justify-content: center;
    width: 350px;
    height: 360px;
}

.requirements {
    border: 0px;
}

.requirements h2 {
    color: #333;
    font-size: 24px;
    margin: 0px;
}

.requirements ul {
    list-style-type: none;
    padding: 0;
    font-size: 20px;
}

.requirements ul li {
    margin-bottom: 10px;
}

.requirements label {
    font-weight: bold;
}

</style>
  
  