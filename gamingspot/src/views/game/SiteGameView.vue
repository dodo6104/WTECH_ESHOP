<template>
  <div class="gameview">
    <div class="gameFilters">
      <button
        v-for="(filter, index) in filters"
        :key="index"
        class="FilterButton"
        :class="{ 'active': selectedFilterIndex === index }"
        @click="selectFilter(index, filter)"
        v-html="filter.mode">
      </button>
    </div>
    <div class="gameItems">
      <Section :products="LatestGreatestProducts" sectionName=""/>
    </div>
  </div>
</template>

<script>
import SiteProduct from '../../components/HomePageAndGameView/SiteProduct.vue';
import Section from '../../components/HomePageAndGameView/SiteGameViewSection.vue';

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
        SiteProduct,
        SiteProduct
      ],
      filters: [
        { mode: 'Best-selling<br>Best', toggle: 'Best-selling<br>Worst' },
        { mode: 'By price<br>Low to High', toggle: 'By price<br>High to Low' },
        { mode: 'By reviews<br>Best', toggle: 'By reviews<br>Worst' },
        { mode: 'Alphabetically<br>A-Z', toggle: 'Alphabetically<br>Z-A' },
      ],
      selectedFilterIndex: 0,
    };
  },
  methods: {
    selectFilter(index, filter) {
      if (this.selectedFilterIndex === index) {
        let temp = filter.mode;
        filter.mode = filter.toggle;
        filter.toggle = temp;
      } else {
        this.selectedFilterIndex = index;
      }
    }
  }
}
</script>

<style>
.gameFilters {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  border: solid black; 
  padding-bottom: 40px;
  border-width: 0px 0 1px 0px;
}

.FilterButton {
  font-size: 15px;
  width: 130px;
  height: 50px;
  margin: 30px 10px 0 10px;
  background-color: #012950;
  color: white;
}

.FilterButton.active {
  background-color: #024f9d;
  color: white; 
}

@media (max-width: 620px) {
  .gameFilters {
    display: grid;
    grid-template-columns: auto auto;
  }
}
</style>
