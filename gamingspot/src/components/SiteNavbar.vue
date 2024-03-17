<template>
  <nav class="navbar">
    <button type="button" @click="$router.push('/')">
      <div class="navbar-brand">GamingSpot</div>
    </button>
    <div class="navbar-menu">
      <button v-show="isVisible">
        <div class="navbar-item" >Platforms ▽</div>
      </button>
      <button v-show="isVisible">
        <div class="navbar-item">Genres ▽</div>
      </button>
    </div>
    <div class="navbar-search">
      <input type="text" placeholder="Search" >
      <button type="button" id="SearchMagnifyingGlass" @click="buttonClicked" :disabled="isButtonDisabled">
        <img src="../assets/icons/search.png" alt="Search" />
      </button>
    </div>
    <div class="navbar-icons">
      <button type="button" @click="$router.push('/login')">
        <img src="../assets/icons/user.png" alt="Login" />
      </button>
      <button type="button">
        <img src="../assets/icons/shopping-cart.png" alt="Cart" />
      </button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'SiteNavbar',
  data() {
    return {
      isButtonDisabled: true,
      isVisible: true,
    };
    
  },
  methods: {
    buttonClicked() {
      this.isVisible = !this.isVisible;
    },
    checkScreenWidthAndAdjustButton() {
      this.isButtonDisabled = window.innerWidth >= 1052+22;
    },
  },
  mounted() {
    this.checkScreenWidthAndAdjustButton();
    window.addEventListener('resize', this.checkScreenWidthAndAdjustButton);
  },
  beforeUnmount() { 
    window.removeEventListener('resize', this.checkScreenWidthAndAdjustButton);
  },
};
</script>

<style src="../styles/SiteNavbar.css"></style>
