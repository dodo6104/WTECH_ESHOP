<template>
    <section id="main-section">
        
        <h1>Payment Information</h1>

        <section id="view-section">
            <div class="row">
                <NicknameEntry placeholder="Credit Card Number"/>
                <NicknameEntry placeholder="Cardholder Name"/>
            </div>

            <div class="row">
                <NicknameEntry placeholder="Expiration Date"/>
                <NicknameEntry placeholder="CVV/CVC"/>
            </div>

            <div class="row">
                <NicknameEntry placeholder="Billing Address"/>
                <NicknameEntry placeholder="Shipping Address"/>
            </div>

            <div class="row">
                <SaveButton/>
            </div>
        </section>

    </section>
</template>

<script>

import NicknameEntry from './SiteNicknameEntry.vue';
import SaveButton from './SiteSaveButton.vue';

export default {
    name: "PaymentInfo",
    components: {
        NicknameEntry,
        SaveButton
    }
}
</script>

<style scoped>
h1 {
    font-size: 25px;
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 0;
}

#main-section {
    width: 100%;
    display: flex; /* Use Flexbox */
    flex-direction: column; /* Arrange children vertically */
}

#view-section {
    align-items: center;
    margin: 10px;
    padding-top: 40px;
    border-top: 1px solid;
    display: flex;
    flex-direction: column;
    /* margin-left: 20px; */
    /* margin-right: 20px; */
}

.row {
    display: flex;
    flex-direction: row;
    gap: 10px; /* Add gap between items in the row */
}

/* Adjust padding for NicknameEntry components */
.NicknameEntry {
    padding: 10px; /* Add padding to all sides of each NicknameEntry component */
}
</style>