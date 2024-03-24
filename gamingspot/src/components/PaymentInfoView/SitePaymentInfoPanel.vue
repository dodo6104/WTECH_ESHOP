

<template>

<section class="view-section">
    <div class="info-row">
        <NicknameEntry class="input-entry" placeholder="Credit Card Number"/>
        <NicknameEntry class="input-entry" placeholder="Cardholder Name"/>
    </div>

    <div class="info-row">
        <NicknameEntry class="input-entry" placeholder="Expiration Date"/>
        <NicknameEntry class="input-entry" placeholder="CVV/CVC"/>
    </div>

    <div class="info-row">
        <NicknameEntry class="input-entry" placeholder="Billing Address"/>
        <NicknameEntry class="input-entry" placeholder="Shipping Address"/>
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
    padding-right: 10px
}

.info-row {
    width: 100%;
    display: flex;
    flex-direction: row;
    gap: 5px;
    flex-grow: 1;
    
}

.input-entry{
    margin: 5px;
}

@media only screen and (max-width: 600px){


    .info-row{
        
        width: 100%;
        /* background-color: green; */
        flex-direction: column;
        margin: 0px;
        padding: 0px;
        align-items: center;
        gap: 0px;
        /* width: 100%; */
        /* gap: 15px */
    }
}

</style>