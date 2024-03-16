<template>
  <div class = "Content">
  <section class="latest-greatest">
    <h2 class = "Sections">Latest & Greatest ></h2>
    <div class="grid-holder">
    <div class="product-grid">
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
      <SiteProduct/>
    </div>
  </div>
  </section>
</div>
</template>

<script>
import SiteProduct from '../components/SiteProduct.vue';
export default {
  name: 'SiteHome',
  components: {
    SiteProduct
  },
}
</script>

<style src="../styles/SiteHomePage.css"></style>

