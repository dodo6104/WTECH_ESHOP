<template>
    <section class="register-panel">
        <h1>Register</h1>
        
            <EmailFrame></EmailFrame>
            
            <PasswordFrame :inputId="'password_frame1'"></PasswordFrame>
            <PasswordFrame :inputId="'password_frame2'" placeholder="Retype Password"></PasswordFrame>

            <button class="submit-button" type="input">Proceed</button>
            
            <div>
                <label @click="$router.push('/login')">Log in</label>
            </div>
    </section>
 
</template>
  
<script>

import EmailFrame from '../entries/SiteEmailEntry.vue'
import PasswordFrame from '../entries/SitePasswordEntry.vue'

  export default {
    data() {
      return {
      };
    },

    components:{
        EmailFrame,
        PasswordFrame
    },

    methods: {}
  };
  </script>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>

  <style scoped>
  /* Styles for the login panel */
.register-panel {
    /* width: 400px; */
    width: 100%;
    max-width: 400px;
    /* margin: auto; */
    padding: 10px;
    /* padding-right: 25px; */
    text-align: center;
    /* padding-right: 43px; */
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Styles for the "Log in" header */
.register-panel h1 {
    margin-bottom: 50px; /* Add margin at the bottom of the "Log in" header */
}

    /* .password-wrapper {
        position: relative;
    } */

.icon {
    /* position: absolute; */
    top: 43%;
    right: 20px;
    /* transform: translateY(-50%); */
    cursor: pointer;
    font-size: 20px; /* Increase the size of the icon */
}


button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Styles for the label */
label {
    font-family: 'Arial';
    font-size: 16px;
    cursor: pointer;
    text-decoration: underline;
    color: #333;
}
  </style>