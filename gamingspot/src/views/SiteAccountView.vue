<template>
    <section>
        <div class="components-container">
            <AccountMenu @selected-button="handle_selected"/>
            <component :is="selectedComponent"/>
        </div>
    </section>
</template>

<script>
import AccountMenu from '../components/SiteAccountMenu.vue';
import MyOrders from '../components/SiteMyOrders.vue';
import PersonalData from '../components/SitePersonalData.vue';
import PaymentInfo from '../components/SitePaymentInfo.vue';

export default {
    name: 'SiteAccountView',    
    components: {
        AccountMenu,
        MyOrders,
        PersonalData,
        PaymentInfo
    },
    data() {
        return {
            selectedComponent: null
        };
    },
    methods: {
        handle_selected(buttonText) {
            if (buttonText === "My Orders") {
                this.selectedComponent = MyOrders;
            } else if (buttonText === "Personal Data") {
                this.selectedComponent = PersonalData;
            } else if (buttonText === "Payment Information") {
                this.selectedComponent = PaymentInfo;
            }
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