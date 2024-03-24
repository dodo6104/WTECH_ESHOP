<template>

<div class="content-wrapper-left">
    <section class="content-wrapper-col">
        <UnderlinedHeader text="Payment Details"></UnderlinedHeader>

        <section class="payment-details">

            <section class="payment-options">
                
                <div class="option-section">
                    <SlottedButton class="slotted-button" text="VISA" @button-selected="handleSelected" index="0" :isSelected="selectedButton === '0'">
                        <img class="visa-icon" src="../../assets/icons/visa.png">
                    </SlottedButton>
                

                    <SlottedButton class="slotted-button" text="MasterCard" @button-selected="handleSelected" index="1" :isSelected="selectedButton === '1'">
                        <img class="mastercard-icon" src="../../assets/icons/mastercard.png">
                    </SlottedButton>
                </div>

                <div class="option-section">
                    <SlottedButton class="slotted-button" text="PayPal" @button-selected="handleSelected" index="2" :isSelected="selectedButton === '2'">
                        <img class="paypal-icon" src="../../assets/icons/paypal.png">
                    </SlottedButton>

                    <SlottedButton class="slotted-button" text="PaysafeCard" @button-selected="handleSelected" index="3" :isSelected="selectedButton === '3'">
                        <img class="paysafe-icon" src="../../assets/icons/paysafe.png">
                    </SlottedButton>
                </div>
            </section>

            <div class="payment-info-wrapper">
                <section :class="{ 'payment-info': selectedButton === '0' || selectedButton === '1', 'payment-info-disabled': selectedButton !== '0' && selectedButton !== '1' }">
                    <h2 class="card-details-header">Card Details</h2>
                    <PaymentInfo></PaymentInfo>
                </section>

                <div class="pay-button-wrapper">
                    <Label class="continue-shopping-label" @click="$router.push('/')">Continue Shopping?</Label>
                    <CustomButton class="pay-button" text="Pay"></CustomButton>
                </div>
            </div>

        </section>

        <div class="control-panel">
            <button class="submit-button" type="submit" @click="$router.push('/summary')">back</button>

        </div>

    </section>    
</div>

</template>


<script>



import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';
import SlottedButton from '../../components/buttons/SiteSlottedButton.vue';
import PaymentInfo from '../../components/PaymentInfoView/SitePaymentInfoPanel.vue';
import CustomButton from '../../components/buttons/SitePayButton.vue';

export default {
    name: "PaymentDetailsView",
    components: {
        UnderlinedHeader,
        SlottedButton,
        PaymentInfo,
        CustomButton
    },
    methods: {
        handleSelected(index){
            this.selectedButton = index;
        }
    },
    data() {
        return{
            selectedButton: "0"
        }
    }
}


</script>

<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/SiteContentWrapper.css"></style>;
<style src="../../styles/sections/SiteLowerControlPanel.css"></style>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>;

<style scoped>


.slotted-button{
    border: 1px solid;
    border-color: black;
    width: 50%;
}

.submit-button{
    margin: 5px
}

.payment-details{
    display: flex;
    flex-direction: column;
    justify-content: left;
    width: 97%;
    gap: 15px;

}

.payment-options{
    display: flex;
    flex-direction: row;
    width: 100%
}


.payment-info-wrapper{
    display: flex;
    flex-direction: row;
    align-items: bottom;
    min-width: none;
    width: 100%;
}



.payment-info, .payment-info-disabled {
    width: 50%;
    border: 1px solid;
}

.payment-info-disabled{
    opacity: 0.5;
    cursor: not-allowed;
}

.continue-shopping-label{
    font-size: 20px;
    text-decoration: underline;
    margin-bottom: 5px;
    cursor: pointer;
}

.pay-button-wrapper{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    width: 50%;
    padding-bottom: 20px;
}

.card-details-header{
    padding-left: 5px;
}


.visa-icon, .mastercard-icon, .paysafe-icon, .paypal-icon {
    width: 80px;
    height: auto;
}

.option-section {
    display: flex;
    flex-direction: row;
    width: 50%;
}


@media only screen and (max-width: 1200px){
    .payment-details{
        width: 60%;
        justify-content: center;
        align-items: center
    }

    .payment-options{

        min-width: 600px;
        flex-direction: column;
        gap: 0px;
        justify-content: left;
    }

    .payment-info-wrapper{
        min-width: 500px;
        width: 100%;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .payment-info{
        width: 100%;
    }

    .control-panel{
        justify-content: center;
        padding-left: 0px;
    }
    
    .option-section{
        width: 100%;
    }
}

@media only screen and (max-width: 600px){
    .option-section{
        flex-direction: column;
        justify-content: center;
        align-items: center
    }

    .payment-info-wrapper{
        min-width: 300px;
        width: 100%;
    }

    .payment-info, .payment-info-disabled{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .pay-button-wrapper{
        width: 90%;
        justify-content: center;
        align-items: center;
    }


    .pay-button{
        width: 80%;
    }
}


</style>../components/SitePaymentInfoView.vue