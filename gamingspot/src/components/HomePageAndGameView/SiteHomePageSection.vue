<template>
    <section class="Section">
    <h1 class="Sections">{{ sectionName }}</h1>
      <div class="product-grid">
        <SiteProduct v-for="product in products" :key="product.id" :product="product"/>
      </div>
    </section>
  </template>
  
  <script>
  import SiteProduct from './SiteProduct.vue';
  
  export default {
    name: 'SiteHomePageSection',
    components: {
      SiteProduct
    },
    props: {
      products: Array,
      sectionName: String, 
    },
  }
  </script>
  
<style>

.Section{
  display: grid;
}

.Sections {
  display: flex;
  width: 100%;
  height: 100px;
  margin-bottom: 20px;
  font-size: 35px;
  font-weight: bold;
  align-items: center;
}


.product-grid { 
    padding: 0px 50px 0px 50px;
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 40px;
    margin: 0 auto;
    justify-content: center; 
}
  
</style>
  