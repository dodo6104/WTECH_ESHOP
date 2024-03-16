<template>
    <div class="LatestGreatest"> <Section :products="LatestGreatestProducts" sectionName="Latest & Greatest >"/></div>
    <div class="Bestsellers"> <Section :products="BestsellersProducts" sectionName="Bestsellers >"/> </div>
    <div class="MegaDiscounts"> <Section :products="MegaDiscountsProducts" sectionName="Mega Discounts >"/> </div>
</template>

<script>
import SiteProduct from '../components/SiteProduct.vue';
import Section from '../components/SiteHomePageSection.vue';
export default {
  name: 'SiteHome',
  components: {
     Section
  },
  data() {
    return {
      LatestGreatestProducts: [
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
      ],
      BestsellersProducts: [
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
      ],
      MegaDiscountsProducts: [
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
        { SiteProduct },
      ],
    };
  },
}
</script>

<style src="../styles/SiteHomePage.css"></style>
