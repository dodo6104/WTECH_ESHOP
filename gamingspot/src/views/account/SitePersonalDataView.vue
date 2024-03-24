<template>
    <div class="main-section">
        <!-- Ensure that toHorizontal is passed as a number, not a string -->
        <AccountMenu @selected-button="handle_selected" :account_id="account_id" :selectedIndex="selected_button"/>
        <section class="content-section">
            <UnderlinedHeader text="Personal Data"></UnderlinedHeader>
            <PersonalData />
        </section>
    </div>
</template>

<script>
import AccountMenu from '../../components/account/SiteAccountMenu.vue';
import PersonalData from '../../components/PersonalDataView/SitePersonalDataPanel.vue'
import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';

export default {
    name: "MyOrdersView",
    props: {
        account_id: {
            type: String,
            required: true
        },
        selected_button: {
            type: String,
            required: false,
            default: "1"
        }
    },
    components: {
        AccountMenu,
        PersonalData,
        UnderlinedHeader
    },
    methods: {
        handle_selected() {
            // Your method implementation
        }
    },
    mounted() {
  
    // document.documentElement.style.setProperty('--max-width', '200px'); // Change '500px' to any value you want
  }
}
</script>

<style src="../../styles/sections/main_section.css"></style>
<style src="../../styles/sections/content_section.css"></style>

<style>
@media only screen and (max-width: 800px){
    .main-section{
        justify-content: center;
        align-items: left;
        flex-direction: column;
    }
}

</style>

<style src="../../styles/sections/SiteAccountMenu.css"></style>