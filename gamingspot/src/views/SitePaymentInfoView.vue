

<template>
    <section id="main-section">
        <div class="components-container">
            <AccountMenu @selected-button="handle_selected" :account_id="account_id"/>
            <PaymentInfo />
        </div>
        

    </section>

</template>


<script>

import AccountMenu from '../components/SiteAccountMenu.vue';
import PaymentInfo from '../components/SitePaymentInfo.vue'

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
        PaymentInfo
    },
    methods: {
        handle_selected(){

        }
    }
}

</script>

<style scoped>

.components-container {
    width: 100%;
    display: flex; /* Use flexbox to layout children horizontally */
}

</style>