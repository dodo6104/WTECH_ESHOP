<template>
    

    <section class="main-section">
        <UnderlinedHeader text="Personal Data"></UnderlinedHeader>
    
        <section id="view-section">
            <NicknameEntry class="password-frame" placeholder="Nickname"/>
            <PasswordEntry class="password-frame" inputId="password_frame_1"/>
            <PasswordEntry class="password-frame" inputId="password_frame_2" placeholder="New Password"/>
            <PasswordEntry class="password-frame" inputId="password_frame_3" placeholder="Retype Password"/>
            <CustomButton text="Save"/>
        </section>
    </section>
</template>

<script>

import NicknameEntry from './SiteNicknameEntry.vue'
import PasswordEntry from './SitePasswordEntry.vue'
import CustomButton from './SiteSaveButton.vue'
import UnderlinedHeader from './general/SiteUnderlinedHeader.vue'


export default {
    name: "PersonalData",
    components: {
        NicknameEntry,
        PasswordEntry,
        CustomButton,
        UnderlinedHeader
    }
}
</script>

<style scoped>


.main-section {

    width: 100%;
    /* display: flex;
    flex-direction: column; */
    
    
}

#view-section {
    padding-top: 40px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
    align-items: center;
    width: 100%;
    /* max-width: 300px; */
    margin: 10px;
    border: 1px solid;
}

.nickname-frame {
    width: 300px;
}

.password-frame {
    width: 300px;
    margin-bottom: 10px; /* Add margin between PasswordFrames */
}

</style>
