<template>
  <div class="login-wrapper">
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
.login-wrapper {
  display: flex;
  justify-content: center;  
  align-items: center;
  width: 100%;

}


</style>