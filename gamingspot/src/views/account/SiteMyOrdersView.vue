

<template>
    <div class="content-wrapper-left">
        <AccountMenu  @selected-button="handle_selected" :account_id="account_id" :selectedIndex="selected_button"/>

        <section class="content-wrapper-col">
            <UnderlinedHeader text="My Orders"></UnderlinedHeader>
            
            <MyOrders />
        </section>
    
    </div>

</template>


<script>

import AccountMenu from '../../components/account/SiteAccountMenu.vue';
import MyOrders from '../../components/MyOrders/SiteMyOrders.vue'
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


<style src="../../styles/sections/SiteContentWrapper.css"></style>;

<style scoped>

@media only screen and (max-width: 800px) {
    .content-wrapper-left{
        flex-direction: column;
    }
}

</style>