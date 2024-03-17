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
import MyOrders from '../components/MyOrders/SiteMyOrders.vue';
import PersonalData from '../components/SitePersonalData.vue';
import PaymentInfo from '../components/SitePaymentInfo.vue';


export default {
    props: {
        account_id: {
            type: String,
            required: true
        }
    },
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
                this.$router.push(`/account=${this.account_id}/my_orders`)
                // this.$router.push('/account=${this.account_id}/my_orders')
            } else if (buttonText === "Personal Data") {
                this.selectedComponent = PersonalData;
                // this.$router.push(`/account=${this.account_id}/personal_data`)
            } else if (buttonText === "Payment Information") {
                this.selectedComponent = PaymentInfo;
                // this.$router.push(`/account=${this.account_id}/payment_info`)
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
</style>../components/MyOrders/SiteMyOrders.vue../components/MyOrders/ks.vue