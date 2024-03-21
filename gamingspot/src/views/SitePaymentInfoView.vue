<template>
    

    <section class="main-section">
        <AccountMenu @selected-button="handle_selected" :account_id="account_id"/>
        
        
        
        <section class="view-section">
            <UnderlinedHeader class="header" text="Payment Info"></UnderlinedHeader>    
            
            
            <section class="payment-info">
                
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
                    <SaveButton class="save-button" text="Save"/>
                </div>
            </section>
        </section>

    </section>
</template>

<script>

import NicknameEntry from '../components/SiteNicknameEntry.vue';
import SaveButton from '../components/SiteSaveButton.vue';
import AccountMenu from '../components/SiteAccountMenu.vue'
import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';

export default {
    name: "PaymentInfo",
    components: {
        NicknameEntry,
        SaveButton,
        AccountMenu,
        UnderlinedHeader
    }
}
</script>

<style scoped>



.main-section {
    /* background-color: rgb(115, 255, 0); */
    width: 100%;
    display: flex; /* Use Flexbox */
    flex-direction: row; /* Arrange children vertically */
}

.view-section {
    /* background-color: red; */

    /* background-color: red; */
    align-items: center;
 
    /* justify-content: left; */
    /* margin: 10px; */
    width: 100%;
    /* padding-top: 40px; */
    /* border-top: 1px solid; */
    display: flex;
    flex-direction: column;

    /* margin-left: 20px; */
    /* margin-right: 20px; */
}

.row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 10px; /* Add gap between items in the row */
}



@media only screen and (max-width: 800px){
    .view-section{
        .payment-info{
            display: flex;
            flex-direction: column;
        }

        .row{
            flex-direction: column;
            gap: 0px;
        }

        .save-button{
            margin-left: 5px;
        }
    }
}




</style>