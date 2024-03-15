<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <div id="app">
    <LoginPanel @switchToRegister="showRegisterPanel" v-if="showLoginPanel"/>
    <RegisterPanel @switchToLogin="toLoginPanel" v-else/>
    <MainFooter></MainFooter>
  </div>
</template>

<script>
import LoginPanel from './components/LoginPanel.vue';
import RegisterPanel from './components/RegisterPanel.vue';
import MainFooter from './components/MainFooter.vue'

export default {
  name: 'App',
  components: {
    LoginPanel,
    RegisterPanel,
    MainFooter
  },
  data() {
    return {
      showLoginPanel: true
    };
  },
  methods: {
    // Switch to the register panel
    showRegisterPanel() {
      this.showLoginPanel = false;
    },
    // Switch to the login panel
    toLoginPanel() {
      this.showLoginPanel = true;
    }
  }
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>