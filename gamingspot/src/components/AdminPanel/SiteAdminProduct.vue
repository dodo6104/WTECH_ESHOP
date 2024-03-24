<template>
  <div class="card"  @click="onCardClick">
    <div class="image-placeholder">
      <img :src="image" alt="Game image" width="250" height="250">
    </div>
    <div class="game-info">
      <h2 class="game-name">{{ name }}</h2>
      <p class="platform">{{ platform }}</p>
      <p class="price">{{ price }}</p>
      <button class="add-to-cart" @click.stop="editproduct">Edit Product</button>
      <button class="remove-product" @click.stop="removeproduct">Remove Product</button>

    </div>
  </div>
</template>


<script>
export default {
  name: 'SiteProduct',
  props: {
    name: {
      type: String,
      required: true
    },
    platform: {
      type: String,
      required: true
    },
    price: {
      type: String,
      required: true
    },
    image: {
      type: String,
      required: true
    }
  },
  methods: {
    editproduct() {
      this.$router.push({ path: '/addedit' });
    },
    removeproduct() {
      console.log("remove")
    }
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
  padding: 10px 20px;
  text-transform: uppercase;
  margin-top: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-weight: bold;
  width: 200px;
  height: 50px;
  border-radius: 20px;
  font-size: 20px;
}

.add-to-cart:hover {
  background-color: rgb(205, 239, 68);
  }

.remove-product {
  background-color: red;
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
  font-size: 15px;
}
.remove-product:hover {
  background-color: rgb(253, 82, 82);
}
</style>