<template>
    <section id="main-section">
        <h1>Personal Data</h1>
        <section id="view-section">
            <NicknameEntry class="password-frame"/>
            <PasswordEntry class="password-frame" inputId="password_frame_1"/>
            <PasswordEntry class="password-frame" inputId="password_frame_2" placeholder="New Password"/>
            <PasswordEntry class="password-frame" inputId="password_frame_3" placeholder="Retype Password"/>
            <Button class="button">Save</Button>
        </section>
    </section>
</template>

<script>

import NicknameEntry from './SiteNicknameEntry.vue'
import PasswordEntry from './SitePasswordEntry.vue'

export default {
    name: "PersonalData",
    components: {
        NicknameEntry,
        PasswordEntry
    }
}
</script>

<style scoped>
h1 {
    font-size: 25px;
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

.button {
    width: 200px;
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #0056b3;
}

.button:active {
  background-color: #0056b3;
  transform: translateY(1px);
}


</style>
