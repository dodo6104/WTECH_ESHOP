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
  font-size: 35px;
  font-weight: bold;
  align-items: center;
  border: solid black; 
  border-width: 0px 0 1px 0px;
  padding-left: 20px;
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
    grid-template-columns: none;
    padding: 0px 0px 0px 0px;
  }
}
</style>
  