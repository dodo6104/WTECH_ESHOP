<template>

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

  <!-- </section> -->
</template>

<script>
// Import the OrderFrame component
import OrderFrame from './SiteOrderFrame.vue';
// import UnderlinedHeader from '../general/SiteUnderlinedHeader.vue';

export default {
  name: "MyOrdersView",
  components: {
    OrderFrame
    // UnderlinedHeader
  },
  methods: {
  }
};
</script>

<style scoped>


.view-section{
  /* padding-left: 50px; */
  margin-left: 50px;
}

.game-row {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;

}

</style>