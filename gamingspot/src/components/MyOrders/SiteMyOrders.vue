<template>

    <section class="content-wrapper-col">
      <div class="game-row">
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
        <OrderFrame />
      </div>
    </section>

</template>

<script>

import OrderFrame from './SiteOrderFrame.vue';


export default {
  name: "MyOrdersView",
  components: {
    OrderFrame
  },
  methods: {
  }
};
</script>



<style src="../../styles/sections/SiteContentWrapper.css"></style>;
<style scoped>

.game-row {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: left;
}

</style>