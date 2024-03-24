<template>
    <div class="content-wrapper-left">
        <AccountMenu @selected-button="handle_selected" :account_id="account_id" :selectedIndex="selected_button"/>
        
        <section class="content-wrapper-col">
            <UnderlinedHeader class="header" text="Payment Info"></UnderlinedHeader>    
            
            
            <div class="payment-info">
                
                <div class="info-row">
                    <NicknameEntry placeholder="Credit Card Number"/>
                    <NicknameEntry placeholder="Cardholder Name"/>
                </div>

                <div class="info-row">
                    <NicknameEntry placeholder="Expiration Date"/>
                    <NicknameEntry placeholder="CVV/CVC"/>
                </div>

                <div class="info-row">
                    <NicknameEntry placeholder="Billing Address"/>
                    <NicknameEntry placeholder="Shipping Address"/>
                </div>

                <div class="info-row">
                    <Button class="submit-button">Save</Button>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

import NicknameEntry from '../../components/entries/SiteNicknameEntry.vue';
import AccountMenu from '../../components/account/SiteAccountMenu.vue'
import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';

export default {
    name: "PaymentInfo",
    components: {
        NicknameEntry,
        AccountMenu,
        UnderlinedHeader
    },
    props: {
        account_id: {
            type: String,
            required: true
        },
        selected_button: {
            type: String,
            required: false,
            default: "1"
        }
    }
}
</script>

<!-- Custom Styles -->


<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/SiteContentWrapper.css"></style>;

<style src="../../styles/buttons/SiteSubmitButton.css"></style>


<style scoped>

.info-row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 10px;
}

@media only screen and (max-width: 800px){
    .content-wrapper-left{
        flex-direction: column;
    }
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

@media only screen and (max-width: 600px) {
    .info-row{
        width: 100%;
        /* background-color: green; */
        flex-direction: column;
        margin: 0px;
        padding: 0px;
        align-items: center;
        gap: 0px;
    }
}


</style>