

<template>

<UnderlinedHeader text="Payment Details"></UnderlinedHeader>

<section class="view-section">

    <section class="payment-details">

        <section class="payment-options">
            
            <div class="upper-payment-section">
                <SlottedButton text="VISA" @button-selected="handleSelected" index="0" :isSelected="selectedButton === '0'">
                    <img class="visa-icon" src="../assets/icons/visa.png">
                </SlottedButton>
            

                <SlottedButton text="MasterCard" @button-selected="handleSelected" index="1" :isSelected="selectedButton === '1'">
                    <img class="mastercard-icon" src="../assets/icons/mastercard.png">
                </SlottedButton>
            </div>

            <div class="lower-payment-section">
                <SlottedButton text="PayPal" @button-selected="handleSelected" index="2" :isSelected="selectedButton === '2'">
                    <img class="paypal-icon" src="../assets/icons/paypal.png">
                </SlottedButton>

                <SlottedButton text="PaysafeCard" @button-selected="handleSelected" index="3" :isSelected="selectedButton === '3'">
                    <img class="paysafe-icon" src="../assets/icons/paysafe.png">
                </SlottedButton>
            </div>
        </section>

        <div class="payment-info-wrapper">
            <section class="payment-info">
                <PaymentInfo></PaymentInfo>
            </section>

            <div class="pay-button-wrapper">
                <Label class="continue-shopping-label" @click="$router.push('/')">Continue Shopping?</Label>
                <CustomButton class="pay-button" text="Pay"></CustomButton>
            </div>

        </div>

    </section>

</section>

</template>


<script>



import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';
import SlottedButton from '../components/general/SiteSlottedButton.vue';
import PaymentInfo from '../components/PaymentInfo/SitePaymentInfo.vue';
import CustomButton from '../components/PaymentInfo/SitePayButton.vue';

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
            console.log("Button clicked with index:", index);
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


<style scoped>

.view-section{
    padding-left: 40px;
    padding-right: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

button{
    border: 1px solid;
    border-color: black;
    width: 25%;

    min-width: 270px
}

.payment-details{
    background-image: linear-gradient(to top, #13ffe0, #139624);
    display: flex;
    flex-direction: column;
    justify-content: left;
    max-width: 1100px;

    gap: 15px;

}

.payment-options{
    display: flex;
    flex-direction: row;




    /* max-height: 70px; */
}

.payment-info-wrapper{

    display: flex;
    flex-direction: row;
    align-items: bottom;
    width: 100%;

}

.payment-info{
    /* border: 1px solid; */
    /* margin-right: 545px; */
    width: 50%;
}

.continue-shopping-label{
    font-size: 20px;
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




.visa-icon, .mastercard-icon, .paysafe-icon, .paypal-icon {
    width: 80px;
    height: auto;
}

.lower-payment-section, .upper-payment-section {
    display: flex;
    flex-direction: row;
}

@media only screen and (max-width: 1160px){
    .payment-details{
        width: 540px;
    }
    .payment-options{
        flex-direction: column;
        gap: 0px;
        justify-content: left;
    }
    .payment-info-wrapper{
        width: 540px;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .payment-info{
        min-width: 538px;
    }



}


</style>../components/SitePaymentInfoView.vue