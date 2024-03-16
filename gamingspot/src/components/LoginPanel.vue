<template>
    <div>
        <h1>{{ title }}</h1>
        
        <section id="login_panel">
            <h1>Log in</h1>
            
            <EmailFrame></EmailFrame>
            <PasswordFrame :inputId="'password_frame1'"></PasswordFrame>
            <ProceedButton></ProceedButton>
                
            <div @click="switchToRegisterPanel">
                <label>Register</label>
            </div>
        </section>
    </div>
</template>
  
<script>

import EmailFrame from './EmailFrame.vue'
import PasswordFrame from './PasswordFrame.vue'
import ProceedButton from './ProceedButton.vue';

export default {

    data() {
        return {
            title: 'GamingSpot',
            email: '',
            password: '',
            isValidEmail: true,
            passwordVisible: false
        };
    },
    components: {
        EmailFrame,
        PasswordFrame,
        ProceedButton
    },

    methods: {
        switchToRegisterPanel() {
            this.$emit('switchToRegister');
        },
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
  
<style scoped>
/* Styles for the login panel */
#login_panel {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    padding-top: 10px;
    border: 1px solid #ccc; /* Default border color */
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Styles for the "Log in" header */
#login_panel h1 {
    margin-bottom: 50px; /* Add margin at the bottom of the "Log in" header */
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