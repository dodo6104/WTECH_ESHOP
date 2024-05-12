<template>
    <div class="site-add-edit">
      <form>
        <div class="form-group">
          <label for="productName">Product Name:</label>
          <input type="text" id="productName" v-model="product.name">
        </div>
  
        <div class="form-group">
          <label for="productDescription">Product Description:</label>
          <textarea id="productDescription" v-model="product.description"></textarea>
        </div>
  
        <div class="form-group">
          <label for="platform">Platforms:</label>
          <select id="platform" v-model="product.platforms" multiple>
            <option value="web">Steam</option>
            <option value="mobile">Epic Games</option>
            <option value="desktop">EA</option>
        </select>
        </div>
  
        <div class="form-group">
          <label for="genre">Genres:</label>
          <select id="genre" v-model="product.genres" multiple>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="strategy">Strategy</option>
        </select>
        </div>
  
        <div class="form-group">
          <label for="basePrice">Base price:</label>
          <input type="number" id="basePrice" v-model="product.basePrice">
        </div>
  
        <div class="form-group">
          <label for="actualPrice">Actual Price:</label>
          <input type="number" id="actualPrice" v-model="product.actualPrice">
        </div>
  
        <div class="form-group">
          <label>Product pictures (minimum 2):</label>
          <input type="file" @change="handleFileUpload" multiple>
          <div class="images-preview">
            <img v-for="(image, index) in product.images" :src="image" :key="index" alt="Show Picture">
          </div>
        </div>
        <button type="submit">Remove Product</button>
        <button type="submit">Save Product</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    name: 'SiteAddEdit',
    data() {
    return {
        product: {
        name: '',
        description: '',
        platforms: [], 
        genres: [], 
        basePrice: 0,
        actualPrice: 0,
        images: []
        }
    };
    },
    methods: {
      handleFileUpload(event) {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
          const reader = new FileReader();
          reader.onload = (e) => {
            this.product.images.push(e.target.result);
          };
          reader.readAsDataURL(files[i]);
        }
      }
    }
  }
  </script>
  
  <style>
  .site-add-edit .form-group {
    margin-bottom: 1rem;
  }
  
  .site-add-edit label {
    display: block;
    margin-bottom: .5rem;
  }
  
  .site-add-edit input[type="text"],
  .site-add-edit input[type="number"],
  .site-add-edit select[multiple],
  .site-add-edit textarea {
    width: 100%;
    padding: .5rem;
    margin-bottom: .5rem;
  }
  
  .images-preview img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-right: 1rem;
  }
  </style>
  