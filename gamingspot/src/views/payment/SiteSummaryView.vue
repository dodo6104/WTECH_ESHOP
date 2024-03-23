
<template>



<div class="main-section">

    <section class="content-section">
        <UnderlinedHeader text="Summary"></UnderlinedHeader>

        <div class="summary-panel">
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
                <Button class="submit-button" type="submit" :onClick="toPrevSection">Back</Button>
                <Button class="submit-button" type="submit" :onClick="toNextSection">Proceed To Payment</Button>
            </div>
        </div>

    </section>

</div>



</template>

<script>

import router from '@/router'; 
import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';


export default {
    name: "SummaryView",
    components: {
        UnderlinedHeader
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

<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/content_section.css"></style>;
<style src="../../styles/buttons/SiteSubmitButton.css"></style>

<style scoped>


.summary-panel{
    width: 80%;
    max-width: 500px
}

label {
    font-size: 27px;
}

.price-value{
    color: white;
}

.original-price-div, .saved-amount-div, .discounted-price-div {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.discounted-price-div {
    
    background-image: linear-gradient(rgb(238, 255, 0), rgb(255, 174, 0));    padding: 10px; /* Add some padding for better spacing */
    border: 2px solid;
    margin-top: 2px;
    padding-top: 5px;
    padding-right: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
}

.original-price-div, .saved-amount-div {
    /* background-color: rgb(60, 243, 9); */
    background-image: linear-gradient(rgb(0, 123, 255), rgb(4, 6, 132));    padding: 10px; /* Add some padding for better spacing */
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
    font-weight: bold;
    color: white;       
}

.discounted-price-label{
    color: black;
}

.discounted-price{
    font-weight: bold;
    font-size: 30px;
}


.saved-amount {
    font-weight: bold;
    color: red;
}

.discounted-price-label{
    font-size: 30px;
}

.control-panel{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 5px;
    margin: 5px;
}


@media only screen and (max-width: 650px){
    .control-panel{
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 5px;
    }
}

</style>