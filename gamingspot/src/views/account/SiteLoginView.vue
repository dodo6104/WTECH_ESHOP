<template>

  <div class="content-wrapper-row">
    <LoginPanel></LoginPanel>
  </div>

</template>

<script>

import LoginPanel from '@/components/LoginView/LoginPanel.vue';

export default{
  name: "LoginView",
  components:{
    LoginPanel
  }
}

</script>



<style src="../../styles/sections/SiteContentWrapper.css"></style>;