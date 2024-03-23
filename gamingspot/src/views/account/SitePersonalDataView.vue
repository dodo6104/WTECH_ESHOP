

<template>
    <section class="main-section">
        <AccountMenu @selected-button="handle_selected" :account_id="account_id" :selectedIndex="selected_button"/>

        <div class="content-section">
            <UnderlinedHeader text="Personal Data"></UnderlinedHeader>
            <PersonalData />
        </div>
        

    </section>

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
        handle_selected(){

        }
    }
}

</script>

<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/content_section.css"></style>;