<template>
  <section id="main-section">
    <h1>My Orders</h1>

    <section id="view-section">
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

export default {
  name: "MyOrdersView",
  components: {
    // Register the OrderFrame component
    OrderFrame
  },
  methods: {
    // Define your methods here if needed
    // handlePageChange() {}
  }
};
</script>

<style scoped>
h1 {
    font-size: 35px;
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 0;
}

  .game-row {
    display: flex;
    flex-wrap: wrap;
  }

</style>