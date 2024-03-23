<template>
  <div class="content-section">
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


<style>
.content-section {
  /* background-color: red; */
  display: flex;
  justify-content: center;  
  align-items: center;
  /* height: 100vh; Set height to occupy the full viewport height for demonstration */
}


</style>