<template>
    <section id="main-section">
        <h1>Personal Data</h1>
        <section id="view-section">
            <NicknameEntry class="password-frame" placeholder="Nickname"/>
            <PasswordEntry class="password-frame" inputId="password_frame_1"/>
            <PasswordEntry class="password-frame" inputId="password_frame_2" placeholder="New Password"/>
            <PasswordEntry class="password-frame" inputId="password_frame_3" placeholder="Retype Password"/>
            <SaveButton/>
        </section>
    </section>
</template>

<script>

import NicknameEntry from './SiteNicknameEntry.vue'
import PasswordEntry from './SitePasswordEntry.vue'
import SaveButton from './SiteSaveButton.vue'

export default {
    name: "PersonalData",
    components: {
        NicknameEntry,
        PasswordEntry,
        SaveButton
    }
}
</script>

<style scoped>

h1 {
    font-size: 35px;
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 0;
}

#main-section {
    width: 100%;
    display: flex;
    flex-direction: column;
}

#view-section {
    padding-top: 40px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
    align-items: center;
    border-top: 1px solid;
    margin: 10px;
}

.nickname-frame {
    width: 300px;
}

.password-frame {
    width: 300px;
    margin-bottom: 10px; /* Add margin between PasswordFrames */
}

</style>
