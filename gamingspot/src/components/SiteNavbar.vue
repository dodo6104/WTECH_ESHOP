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
    <div class="navbar-search"  :style="searchDivStyles">
      <input type="text" v-model="searchQuery" placeholder="Search" v-show="isSearchVisible" ref="searchInput" @blur="onInputBlur">
      <button type="button" id="SearchMagnifyingGlass" @click="buttonClicked" :disabled="isButtonDisabled">
        <img src="../assets/icons/search.png" alt="Search" />
      </button>
    </div>
    <div class="navbar-icons">
      <button type="button" @click="$router.push('/logged')">
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
      isSearchVisible: true,
      searchDivStyles: {},
      searchQuery: '',
    };
    
  },
  methods: {
    onSearchBar() {
      this.searchDivStyles = {
        display: 'flex',  
        alignItems: 'center',
        borderRadius: '20px',
        backgroundColor: '#FFFFFF',
        height: '37px',
      };
  },
    offSearchBar() {
      this.searchDivStyles = {
        border: 'none',
        marginRight: '20px',
        backgroundColor: 'transparent' 
      };
      this.searchQuery = ''
    },

    onInputBlur() {
      if (window.innerWidth <= 1052+22){
        this.isSearchVisible = false;
        this.isVisible = window.innerWidth <= 1052+22;
        this.offSearchBar();
      }
      else {
        this.isSearchVisible = true;
        this.onSearchBar();
      }
  },

    buttonClicked() {
      this.isSearchVisible = !this.isSearchVisible;
      this.isVisible = !this.isVisible;
      if (this.isSearchVisible) {
        this.onSearchBar();
        this.$nextTick(() => {
      this.$refs.searchInput.focus();
    });
    } 
    else {
      this.offSearchBar();
      }},
    
    checkScreenWidthAndAdjustButton() {
      this.isButtonDisabled = window.innerWidth >= 1052+22;
      this.isVisible = true;
      if (window.innerWidth >= 1052+22){
        this.onSearchBar();
        this.isSearchVisible = true
      } else {
        this.isSearchVisible = false
        this.offSearchBar();
    }
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
