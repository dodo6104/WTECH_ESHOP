<template>
  <div id="app">
    <Navbar @platform-clicked="handlePlatformClick" />
    <platformMenu v-if="isPlatformVisible" ref="PlatformMenu"/>
    <router-view/>
    <Footer />
  </div>
</template>
  
<script>
import Navbar from './components/SiteNavbar.vue'
import Footer from './components/SiteFooter.vue'
import PlatformMenu from './components/SitePlatformMenu.vue'

export default {
  components: {
    Navbar,
    Footer,
    PlatformMenu,
  },
  data() {
    return {
      isPlatformVisible: false
    };
  },
  mounted() {
    window.addEventListener('resize', this.isPlatformVisible = false);
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.isPlatformVisible = false);
  },                                                            
  methods: {
    handlePlatformClick(centerX) {
      this.isPlatformVisible = !this.isPlatformVisible
      this.$nextTick(() => {
      const PlatformMenu = this.$refs.PlatformMenu?.$el;
      if (PlatformMenu) {
        const PlatformMenuRect = PlatformMenu.getBoundingClientRect();
        PlatformMenu.style.position = 'absolute';
        PlatformMenu.style.left = `${centerX - PlatformMenuRect.width / 2}px`;
      }
    });
    }
  }
};
</script>

<style src="./styles/Main.css"></style>
