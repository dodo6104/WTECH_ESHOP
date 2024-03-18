

<template>
    <section id="main-section">
        
        <div class="game-frame">
          <div class="pics">
            <img class="game-image" src="../../assets/pics/gta_v_game.jpg" alt="GTA V Game Image">
            <img class="info-icon" src="../../assets/icons/info.png" alt="Info Icon">

          </div>

          <div class="game-details">
            <div class="game-price">
              <label>12.59€</label>
            </div>
            <div class="game-button">
              <button>Show Code</button>
            </div>
          </div>
          
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
    /* width: 100%; */
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

.pics{
  display: inline-block;
  position: relative;
}

.game-image {
  display: block;
  width: 200px;
  height: auto;
}

.game-frame{
  border: solid 1px;
  align-items: center;
  text-align: center;
}

.info-icon{
  height: 30px;
  position: absolute;
  top: 0px;
  right: 0px;
  cursor: pointer;  
}

.game-button button {
  width: 150px;
  display: inline-block;
  padding: 10px 20px;
  margin-top: 20px;
  margin-bottom: 10px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.game-button:hover button {
  background-color: #0056b3;
}

.game-button:active button {
  background-color: #0056b3;
  transform: translateY(1px);
}


</style>