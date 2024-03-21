

<template>
    <section class="main-section">
        <AccountMenu @selected-button="handle_selected" :account_id="account_id"/>

        <div class="view-section">
            <UnderlinedHeader text="Personal Data"></UnderlinedHeader>
            <PersonalData />
        </div>
        

    </section>

</template>


<script>

import AccountMenu from '../components/SiteAccountMenu.vue';
import PersonalData from '../components/SitePersonalData.vue'
import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';

export default {
    name: "MyOrdersView",
    props: {
        account_id: {
            type: String,
            required: true
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

<style scoped>

.main-section{
    display: flex;
    flex-direction: row;
}

.view-section {

    align-items: center;
    width: 100%;
    display: flex;
    flex-direction: column;
}

</style>