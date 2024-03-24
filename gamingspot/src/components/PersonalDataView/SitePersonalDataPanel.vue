<template>
    <section class="view-section">
        <NicknameEntry class="password-frame" placeholder="Nickname"/>
        <PasswordEntry class="password-frame" inputId="password_frame_1"/>
        <PasswordEntry class="password-frame" inputId="password_frame_2" placeholder="New Password"/>
        <PasswordEntry class="password-frame" inputId="password_frame_3" placeholder="Retype Password"/>
        <Button class="submit-button">Save</Button>
    </section>
</template>

<script>

import NicknameEntry from '../entries/SiteNicknameEntry.vue';
import PasswordEntry from '../entries/SitePasswordEntry.vue';


export default {
    name: "PersonalData",
    components: {
        NicknameEntry,
        PasswordEntry    }
}
</script>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>;


<style scoped>

.view-section {
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    /* background-color: rgb(255, 255, 255); */
    padding-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 350px;
    min-width: 300px;
    width: 40%;
    padding-bottom: 10px;
    padding-left: 8px;
    /* border: 1px solid; */
}

/* .nickname-frame {
    width: 300px;
    width: 100%;

}

.password-frame {
    width: 300px;
    margin-bottom: 10px;
} */

.submit-button{
    width: 70%;
}



</style>
