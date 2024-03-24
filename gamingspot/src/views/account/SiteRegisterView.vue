<template>

  <div class="content-wrapper-row">
    <RegisterPanel/>
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
    

<style src="../../styles/sections/SiteContentWrapper.css"></style>;