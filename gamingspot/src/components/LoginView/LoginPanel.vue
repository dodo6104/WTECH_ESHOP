<template>

    <section class="input-panel">
        <h1 class="input-panel-header">Log in</h1>
        
        <EmailFrame class="email-frame"></EmailFrame>
        <PasswordFrame :inputId="'password_frame1'"></PasswordFrame>
        
        <div>
            <button class="submit-button" type="submit">Proceed</button>
        </div>
        
        <div>
            <label class="to-prev-section-label" @click="$router.push('/register')">Register</label>
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
    }
};
</script>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>
<style src="../../styles/sections/SiteInputPanel.css"></style>