<template>
    <section class="view-section">
        <NicknameEntry class="password-frame" placeholder="Nickname"/>
        <PasswordEntry class="password-frame" inputId="password_frame_1"/>
        <PasswordEntry class="password-frame" inputId="password_frame_2" placeholder="New Password"/>
        <PasswordEntry class="password-frame" inputId="password_frame_3" placeholder="Retype Password"/>
        <CustomButton text="Save"/>
    </section>
</template>

<script>

import NicknameEntry from '../entries/SiteNicknameEntry.vue';
import PasswordEntry from '../entries/SitePasswordEntry.vue';
import CustomButton from '../buttons/SiteSaveButton.vue';


export default {
    name: "PersonalData",
    components: {
        NicknameEntry,
        PasswordEntry,
        CustomButton
    }
}
</script>

<style scoped>



.view-section {
    background-color: rgb(255, 255, 255);
    padding-top: 40px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
    align-items: center;
    justify-content: center;
    max-width: 350px;
    width: 40%;
    padding-bottom: 10px;
    padding-left: 8px;
    /* margin: 10px; */
    
    border: 1px solid;
}

.nickname-frame {
    width: 300px;
    width: 100%;

}

.password-frame {
    width: 300px;
    margin-bottom: 10px; /* Add margin between PasswordFrames */
    
}

</style>
