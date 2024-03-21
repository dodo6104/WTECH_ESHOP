

<template>
    <section class="main-section">
        <AccountMenu  @selected-button="handle_selected" :account_id="account_id"/>

        <section class="view-section">
            <UnderlinedHeader text="My Orders"></UnderlinedHeader>
            
            <MyOrders />
        </section>
    
    </section>

</template>


<script>

import AccountMenu from '../components/SiteAccountMenu.vue';
import MyOrders from '../components/MyOrders/SiteMyOrders.vue'
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
        MyOrders,
        UnderlinedHeader
    },
    methods: {
        handle_selected(){

        }
    }
}

</script>

<style scoped>

.main-section {
    /* background-color: green; */
    width: 100%;
    height: 100%;
    display: flex; /* Use flexbox to layout children horizontally */
    flex-direction: row;
}

.view-section{
    /* background-color: red; */
    align-items: center;
    width: 100%;
    display: flex;
    flex-direction: column;
    height: 100%;
}

</style>