<template>
  <section class="main-section">
    <UnderlinedHeader text="My Orders"></UnderlinedHeader>

    <section class="view-section">
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

    <!-- <PaginationFrame :current-page="1" :total-pages="6" @page-changed="handlePageChange" /> -->

  </section>
</template>

<script>
// Import the OrderFrame component
import OrderFrame from './SiteOrderFrame.vue';
import UnderlinedHeader from '../general/SiteUnderlinedHeader.vue';

export default {
  name: "MyOrdersView",
  components: {
    OrderFrame,
    UnderlinedHeader
  },
  methods: {
  }
};
</script>

<style scoped>

#main-section {
    /* width: 100%; */
    display: flex;
    flex-direction: row;
   
}

.view-section{
  padding-left: 50px;
}

.game-row {
  display: flex;
  flex-wrap: wrap;
}

</style>