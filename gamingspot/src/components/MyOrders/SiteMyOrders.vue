<template>
    <section id="main-section">
      <h1>My Orders</h1>

      <section id="view-section">
        <div class="game-row">
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
        </div>
      </section>

      <PaginationFrame :current-page="1" :total-pages="6" @page-changed="handlePageChange" />

    </section>
  </template>
  
  <script>

  import PaginationFrame from './SitePagination.vue'

  export default {
    name: "OrderFrame",
    components: {
      PaginationFrame
    },
    methods: {
      handlePageChange(){

      }
    }
  };
  </script>
  
  <style scoped>

h1 {
    font-size: 35px;
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 0;
}

img {
  margin-top: 20px;
}

#main-section {
  /* border: 1px solid; */
  width: 100%; /* Set the width to 100% to fill the container */
  display: flex;
  flex-direction: column;
  align-items: left;
}

#view-section {
  /* border: 1px solid; */
  width: 100%; /* Set the width to 100% to fill the container */
  padding-top: 20px;
  margin: 10px;
  display: flex;
  flex-direction: column;
  align-items: left;
  border-top: solid 1px;
}

.game-row {
  display: flex;
  flex-wrap: wrap; /* Allow items to wrap to the next line */
  gap: 10px;
  justify-content: left; /* Center the items horizontally */
  margin: 10px;
}

.game-frame {
  border: 1px solid;
  width: 200px; /* Set a fixed width for each game frame */
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 10px;
  position: relative;
}

.info-icon {
  width: 25px;
  position: absolute;
  top: -12px;
  right: 8px;
}

.game-details {
  margin-left: 10px;
}

.game-price {
  font-size: 20px;
  margin-top: 10px;
}

.game-button button {
  padding: 10px 20px;
  margin-bottom: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.game-button button:hover {
  background-color: #0056b3;
}
</style>