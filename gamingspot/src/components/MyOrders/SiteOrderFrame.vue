

<template>
    <section id="main-section">
        
        <div class="game-frame">
          <img src="../../assets/pics/gta_v_game.jpg" alt="GTA V Game Image" height="200" width="200">
          <div class="game-details">
            <div class="game-price">
              <label>12.59€</label>
            </div>
            <div class="game-button">
              <button>Show Code</button>
            </div>
          </div>
          <img class="info-icon" src="../../assets/icons/info.png" alt="Info Icon">
        </div>

    </section>

</template>

<script>


export default {
    name: "MyOrders",
    
}

</script>


<style>


#main-section {
    width: 100%;
    display: flex; /* Use Flexbox */
    flex-direction: column; /* Arrange children vertically */
}

#view-section {
    align-items: center;
    margin: 10px;
    padding-top: 40px;
    border-top: 1px solid;
    display: flex;
    flex-direction: column;
    /* margin-left: 20px; */
    /* margin-right: 20px; */
}
    

</style>