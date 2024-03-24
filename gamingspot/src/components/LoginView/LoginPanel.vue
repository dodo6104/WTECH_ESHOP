<template>

    <section class="login-panel">
        <h1 class="login-header">Log in</h1>
        
        <EmailFrame class="email-frame"></EmailFrame>
        <PasswordFrame :inputId="'password_frame1'"></PasswordFrame>
        
        <button class="submit-button" type="submit">Proceed</button>
            
        <div>
            <label @click="$router.push('/register')">Register</label>
        </div>
    </section>

</template>
  
<script>

import EmailFrame from '../entries/SiteEmailEntry.vue'
import PasswordFrame from '../entries/SitePasswordEntry.vue'


export default {

    data() {
        return {
            email: '',
            password: '',
            isValidEmail: true,
            passwordVisible: false
        };
    },
    components: {
        EmailFrame,
        PasswordFrame
    },

    methods: {
        togglePasswordVisibility() {
            this.passwordVisible = !this.passwordVisible;
            const passwordInput = document.getElementById('password_frame');
            passwordInput.type = this.passwordVisible ? 'text' : 'password';
        }
    },
    watch: {
        email(newEmail) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isValidEmail = emailRegex.test(newEmail);
        }
    }
};
</script>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>

<style scoped>

.login-panel {
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

    /* Center the login panel horizontally */
    /* margin: 0 auto; Add this line */
}


.login-header {
    margin-bottom: 20px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Styles for the label */
label {
    font-family: 'Arial';
    cursor: pointer;
    font-size: 16px;
    text-decoration: underline;
    color: #333;
}


</style>