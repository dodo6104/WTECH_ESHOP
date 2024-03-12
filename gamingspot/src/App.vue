<template>
    <div id="app">
      <Navbar />
      <router-view/>
      <Footer />
    </div>
  </template>
  
  <script>
  import Navbar from './components/SiteNavbar.vue'
  import Footer from './components/SiteFooter.vue'
  
  export default {
    name: 'App',
    components: {
      Navbar,
      Footer
    }
  }
  </script>
  
  <style>
  /* Tu môžete pridať globálne štýly, ak potrebujete */
  </style>
  