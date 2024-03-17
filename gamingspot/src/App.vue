<template>
  <div id="app">
    <Navbar @platform-clicked="handlePlatformClick" @genres-clicked="handleGenresClick"/>
    <platformMenu v-if="isPlatformVisible" ref="PlatformMenu"/>
    <GenresMenu v-if="isGenresMenuVisible" ref="GenresMenu"/>
    <router-view/>
    <Footer />
  </div>
</template>
  
<script>
import Navbar from './components/SiteNavbar.vue'
import Footer from './components/SiteFooter.vue'
import PlatformMenu from './components/SitePlatformMenu.vue'
import GenresMenu from './components/SiteGenresMenu.vue'

export default {
  components: {
    Navbar,
    Footer,
    PlatformMenu,
    GenresMenu
  },
  data() {
    return {
      isPlatformVisible: false,
      isGenresMenuVisible: false
    };
  },
  mounted() {
    window.addEventListener('resize', this.handleResize);
    this.handleResize();
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.handleResize);
  },                                                            
  methods: {
    handleResize() {
      this.isPlatformVisible = false
      this.isGenresMenuVisible = false
    },
    handlePlatformClick(centerX) {
      this.isGenresMenuVisible = false
      this.isPlatformVisible = !this.isPlatformVisible
      this.$nextTick(() => {
      const PlatformMenu = this.$refs.PlatformMenu?.$el;
      if (PlatformMenu) {
        const PlatformMenuRect = PlatformMenu.getBoundingClientRect();
        PlatformMenu.style.position = 'absolute';
        PlatformMenu.style.left = `${centerX - PlatformMenuRect.width / 2}px`;
      }
    });
    },

    handleGenresClick(centerX) {
      this.isPlatformVisible = false;
      this.isGenresMenuVisible = !this.isGenresMenuVisible;
      this.$nextTick(() => {
      const GenresMenu = this.$refs.GenresMenu?.$el;
      if (GenresMenu) {
        const GenresMenuRect = GenresMenu.getBoundingClientRect();
        GenresMenu.style.position = 'absolute';
        GenresMenu.style.left = `${centerX - GenresMenuRect.width / 2}px`;
      }
    });
    }

  }
};
</script>

<style src="./styles/Main.css"></style>
