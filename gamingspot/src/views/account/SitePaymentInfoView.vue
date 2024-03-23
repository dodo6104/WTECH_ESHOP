<template>
    

    <section class="main-section">
        <AccountMenu @selected-button="handle_selected" :account_id="account_id" :selectedIndex="selected_button"/>
        
        
        
        <section class="content-section">
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

import NicknameEntry from '../../components/entries/SiteNicknameEntry.vue';
import SaveButton from '../../components/buttons/SiteSaveButton.vue';
import AccountMenu from '../../components/account/SiteAccountMenu.vue'
import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';

export default {
    name: "PaymentInfo",
    components: {
        NicknameEntry,
        SaveButton,
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

<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/content_section.css"></style>;


<style scoped>

.row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 10px;
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