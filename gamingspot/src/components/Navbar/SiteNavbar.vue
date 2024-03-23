<template>
  <nav class="navbar">
    <button type="button" @click="$router.push('/')">
      <div class="navbar-brand"><h1 class="navbar-brand-h1"> GamingSpot</h1> <h1><span class="short">GS</span></h1></div>
    </button>
    <div class="navbar-menu">
      <button class="platformButton" v-show="isVisible" @click="platformButtonClicked">
        <div class="navbar-item" >Platforms ▽</div>
      </button>
      <button class="genresButton"  v-show="isVisible" @click="genresButtonClicked">
        <div class="navbar-item">Genres ▽</div>
      </button>
    </div>
    <div class="navbar-search"  :style="searchDivStyles">
      <input type="text" v-model="searchQuery" placeholder="Search" v-show="isSearchVisible" ref="searchInput" @blur="onInputBlur">
      <button type="button" id="SearchMagnifyingGlass" @click="buttonClicked" :disabled="isButtonDisabled">
        <img src="../../assets/icons/search.png" alt="Search" />
      </button>
    </div>
    <div class="navbar-icons">
      <button type="button" @click="$router.push('/login')">
        <img src="../../assets/icons/user.png" alt="Login" />
      </button>
      <button type="button" @click="$router.push('/cart')">
        <img src="../../assets/icons/shopping-cart.gif" alt="Cart" />
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
    platformButtonClicked() {
      const button = this.$el.querySelector('.platformButton');
      const rect = button.getBoundingClientRect();
      const centerX = (rect.left + rect.width / 2)-50;
      this.$emit('platform-clicked', centerX);
    },

    genresButtonClicked() {
      const button2 = this.$el.querySelector('.genresButton');
      const rect2 = button2.getBoundingClientRect();
      const centerX2 = (rect2.left + rect2.width / 2)-50;
      this.$emit('genres-clicked', centerX2);
    },

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

<style >
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 110px;
  font: 21px 'Roboto', sans-serif;
  background-color: #003366;
}

button {
  background-color: transparent;
  border: none;
}

.navbar-brand {
  font-family: 'Roboto', sans-serif;
  font-size: 40px;
  align-items: center;
  padding-left: 20px;
  cursor: pointer;
  color: white;
}


.navbar-brand h1 {
  font-size: 40px;
}
.navbar-brand .short{
  display: none;
}
.navbar-menu {
  display: flex;
  font: 21px 'Roboto', sans-serif;
  align-items: center;
} 

.navbar-menu button {
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  color: white;
}
    
.navbar-item {
  font: 21px 'Roboto', sans-serif;
  display: inline-block;
  width: 120px;
  text-align: center;
}
  
.navbar-search {
  display: flex;  
  align-items: center;
  border-radius: 20px;
  background-color: #FFFFFF;
  height: 37px;
}

.navbar-search input {
  width: 180px;
  background-color: transparent;
  border: none;
  font-size: 21px;
  padding: 20px
}
  
.navbar-search input:focus {
  outline: none;
}

.navbar-search img {
  width: 28px; 
  height: auto; 
}

.navbar-icons {
  padding-right: 20px;
}

.navbar-icons button {
  background-color: transparent;
  margin-left: 10px; 
}

.navbar-icons img {
  width: 40px; 
  height: auto;
}

.navbar-icons button:hover {
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
}
  
.navbar-icons button img:hover {
  opacity: 0.8; 
}

@media (max-width: 1091px) {
  .navbar {
    justify-content: flex-start;
  }
  
  .navbar-menu {
    margin-left: auto; 
    margin-right: 3%;
    margin-right: 0px; 
  }
}

@media (max-width: 782px) {
  .navbar-menu {
    display: flex; 
    flex-direction: column;
    height: 100%;
    justify-content: center;
  }
  .navbar-icons button {
    margin-left: 0px; 
  }
  .navbar-item {
    text-align: right;
  }
}

@media (max-width: 756px) {
  .navbar-icons {
  padding-right: 0px;
}

  .navbar-icons button {
    margin-left: 0px; 
}
.navbar-item {
  margin-right: 0px; 
  text-align: right;
  margin-right: 20px;

}
}
@media (max-width: 600px) {
  .navbar-brand-h1 {
    display: none;
  }
  .navbar-brand .short{
    display: inline;
}
}
@media (max-width: 400px) {
  .navbar-brand-h1 {
    display: none;
  }
  .navbar-brand .short{
    display: none;
  }
  
}
</style>
