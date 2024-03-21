
<template>

<UnderlinedHeader text="Summary"></UnderlinedHeader>

<section class="main-section">

    <section class="view-section">

        <div class="original-price-div">
            <label class="price-label" for="price-value">Original Price:</label>
            <label class="price-value">{{ this.originalPrice }}€</label>
        </div>


        <div class="saved-amount-div">

            <label class="saved-amount-label">You saved:</label>
            <label class="saved-amount">-{{ (this.originalPrice - this.discountedPrice).toFixed(2) }}€</label>

        </div>

        <div class="discounted-price-div">

            <label class="discounted-price-label">Total Price:</label>
            <label class="discounted-price">{{ this.discountedPrice }}€</label>
        </div>

        <div class="control-panel">
            <CustomButton text="Back" :onClick="toPrevSection"></CustomButton>
            <CustomButton text="Proceed To Payment" :onClick="toNextSection"></CustomButton>
        </div>

    </section>

</section>



</template>

<script>

import router from '@/router'; 
import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';
import CustomButton from '../components/SiteSaveButton.vue';


export default {
    name: "SummaryView",
    components: {
        UnderlinedHeader,
        CustomButton
    },
    props: {
        originalPrice: {
            type: Number,
            required: true
        },
        discountedPrice: {
            type: Number,
            required: true
        }
    },
    methods: {
        toPrevSection(){
            router.push('/shipping')
        },
        toNextSection(){
            router.push('/payment')
        }
    }
}


</script>

<style scoped>

.main-section{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.view-section{
    width: 80%;
    max-width: 700px;
}

label {
    font-size: 27px;
}

.original-price-div, .saved-amount-div, .discounted-price-div {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.discounted-price-div {
    
    background-color: yellow;
    border: 2px solid;
    margin-top: 2px;
    padding-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
}

.original-price-div, .saved-amount-div {
    background-color: rgb(60, 243, 9);
    padding: 10px; /* Add some padding for better spacing */
}

.original-price-div{
    border-top: 2px solid;
    border-left: 2px solid;
    border-right: 2px solid;
}

.saved-amount-div{
    border-left: 2px solid;
    border-right: 2px solid;
    border-bottom: 2px solid;
}

.price-label, .saved-amount-label, .discounted-price-label {
    font-weight: bold; /* Make the labels bold */
}

.discounted-price{
    font-weight: bold;
    font-size: 30px;
}


.saved-amount {
    font-weight: bold;
    color: red; /* Change the color of the saved amount */
}

.discounted-price-label{
    font-size: 30px;
}

.control-panel{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 5px;
}

</style>