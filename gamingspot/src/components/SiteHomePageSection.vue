<template>
    <section class="latest-greatest">
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
  
  <style src="../styles/SiteSectionPage.css"></style>
  