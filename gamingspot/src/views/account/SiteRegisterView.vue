<template>
  <div class="register-wrapper">
    <RegisterPanel />
  </div>
</template>
  
<script>

import RegisterPanel from '../../components/RegisterView/RegisterPanel.vue';

export default {
  name: 'SiteLogin',
  components: {
    RegisterPanel
  }
}
</script>
    

<style>
  .register-wrapper{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>