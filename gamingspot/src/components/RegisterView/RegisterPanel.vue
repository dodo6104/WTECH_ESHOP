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
    margin: 50px auto;
    width: 100%;
    max-width: 400px;
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}


.register-panel h1 {
    margin-bottom: 50px;
}



.submit-button{
    margin-top: 10px;
    margin-bottom: 20px;
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