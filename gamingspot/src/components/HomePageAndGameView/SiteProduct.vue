<template>
  <div class="card"  @click="onCardClick">
    <div class="image-placeholder">
      <img src="https://upload.wikimedia.org/wikipedia/en/5/5f/Dishonored_2_cover_art.jpg" alt="" width="250" height="250">
    </div>
    <div class="game-info">
      <h2 class="game-name">Name of the game</h2>
      <p class="platform">Platform</p>
      <p class="price">Price</p>
      <button class="add-to-cart" @click.stop="addToCart">Add To Cart</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SiteProduct',
  methods: {
    onCardClick() {
      this.$router.push({ path: '/gamedetail' });
    },
  }
}
</script>


<style>
.card {
  width: 250px;
  border: 1px solid #000;
  text-align: center;
}

.image-placeholder {
  width: 250px;
  height: 250px;
  background-color: #f0f0f0;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
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
  width: 200px;
  height: 50px;
  border-radius: 20px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
  transition: background-color 0.5s ease;
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
}

.add-to-cart:hover {
  background-color: rgb(205, 239, 68);
}
</style>