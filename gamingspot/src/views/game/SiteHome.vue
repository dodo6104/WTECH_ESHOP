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
import SiteProduct from '../../components/HomePageAndGameView/SiteProduct.vue';
import Section from '../../components/HomePageAndGameView/SiteHomePageSection.vue';

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

<style src="../../styles/SiteHomePage.css"></style>
<style>

</style>
