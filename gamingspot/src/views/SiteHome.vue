<template>
  <div>
    <div class="LatestGreatest">
      <Section :products="LatestGreatestProducts" sectionName="Latest & Greatest >"/>
    </div>
    <div class="Bestsellers">
      <Section :products="BestsellersProducts" sectionName="Bestsellers >"/>
    </div>
    <div class="MegaDiscounts">
      <Section :products="MegaDiscountsProducts" sectionName="Mega Discounts >"/>
    </div>
  </div>
</template>

<script>
import SiteProduct from '../components/HomePageAndGameView/SiteProduct.vue';
import Section from '../components/HomePageAndGameView/SiteHomePageSection.vue';

export default {
  name: 'SiteHome',
  components: {
    Section
  },
  data() {
    return {
      LatestGreatestProducts: [
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct
      ],
      BestsellersProducts: [
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct
      ],
      MegaDiscountsProducts: [
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct,
      SiteProduct
      ],
    };
  },
}
</script>

<style src="../styles/SiteHomePage.css"></style>
<style>
/* Pridané štýly pre overlay */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.overlay-content {
  background: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
</style>
