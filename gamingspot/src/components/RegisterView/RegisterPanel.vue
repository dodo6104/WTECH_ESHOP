<template>
    <section class="input-panel">
        <h1 class="input-panel-header">Register</h1>
        
            <EmailFrame></EmailFrame>
            <PasswordFrame :inputId="'password_frame1'"></PasswordFrame>
            <PasswordFrame :inputId="'password_frame2'" placeholder="Retype Password"></PasswordFrame>

            <div>
                <button class="submit-button" type="input">Proceed</button>
            </div>

            <div>
                <label class="to-prev-section-label" @click="$router.push('/login')">Log in</label>
            </div>
    </section>
 
</template>
  
<script>

import EmailFrame from '../entries/SiteEmailEntry.vue';
import PasswordFrame from '../entries/SitePasswordEntry.vue';

export default {
    components:{
        EmailFrame,
        PasswordFrame
    }
};

</script>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>;
<style src="../../styles/sections/SiteInputPanel.css"></style>;