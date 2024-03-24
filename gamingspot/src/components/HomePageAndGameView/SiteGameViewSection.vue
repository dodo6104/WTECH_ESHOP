<template>
    <div class="Section">
      <div class="product-grid">
        <SiteProduct v-for="product in products" :key="product.id" :product="product"/>
      </div>
    </div>
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

.product-grid { 
    margin-top: 40px;
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 40px;
    justify-content: center; 
}
  
@media (max-width: 920px) {
  .product-grid { 
    grid-template-columns: auto auto;
  }
}

@media (max-width: 630px) {
  .product-grid { 
    grid-template-columns: auto;
    padding: 0px 0px 0px 0px;
  }
}
</style>
  