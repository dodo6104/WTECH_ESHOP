

<template>

<section class="view-section">
    <div class="row">
        <NicknameEntry class="credit-card-number" placeholder="Credit Card Number"/>
        <NicknameEntry class="cardholder-name" placeholder="Cardholder Name"/>
    </div>

    <div class="row">
        <NicknameEntry class="expiration-date" placeholder="Expiration Date"/>
        <NicknameEntry class="CVC-code" placeholder="CVV/CVC"/>
    </div>

    <div class="row">
        <NicknameEntry class="billing-address" placeholder="Billing Address"/>
        <NicknameEntry class="shipping-address" placeholder="Shipping Address"/>
    </div>
</section>

</template>


<script>

import NicknameEntry from '../entries/SiteNicknameEntry.vue';


export default{
    name: "PaymentInfo",
    components: {
        NicknameEntry
    }
}

</script>


<style scoped>


.view-section {
    display: flex;
    flex-direction: column;
}

.row {
    width: 100%;
    display: flex;
    flex-direction: row;
    gap: 10px; /* Add gap between items in the row */
    flex-grow: 1;
}


.credit-card-number, .cardholder-name, .expiration-date, .CVC-code, .billing-address, .shipping-address{
    width: 50%;
}

@media only screen and (max-width: 500px){


    .row{
        flex-direction: column;
        align-items: center;
        gap: 0px
    }
}
</style>