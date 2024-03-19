<template>
    <UnderlinedHeader text="Cart List"></UnderlinedHeader>
    
    <!-- <div v-if="cartItems.length === 0" class="no-items-section">
        
    </div> -->

    <section class="main-section">
       
        <div class="view-section">
            
            <div class="no-items-section" v-if="cartItems.length === 0">
                    <label  class="no-items-label" >Nothing in cart :(</label>
            </div>
            
            <!-- This dynamically loads the items from cartItems and assigns unique keys to them, which are provided when remove-event is
                caught so that the item which emitted the event can be identified and removed. -->
            <section class="cart-list" v-if="cartItems.length !== 0">
                
                <OrderFrame v-for="(item, index) in cartItems" :key="item.name" :name="item.name" :price="item.price" @remove-event="(count) => handleRemove(index, item.price, count)"
                    @increment-event="handle_increment" @decrement-event="handle_decrement"></OrderFrame>
            </section>
        </div>

    </section>


    <div class="control-panel">

      <div class="back-button-div">
        <CustomButton class="back-button" text="Back" :onClick="handle_click"></CustomButton>
      </div>

      <div class="price-continue-div">
        <div class="total-price-frame">
            <label class="total-price-label" for=".total-price">Total Price:</label>
            <label class="total-price">{{totalPrice.toFixed(2)}}€</label>
        </div>

          
          <CustomButton :disabled="isDisabled" :class="{ 'custom-button': true, 'disabled-button': isDisabled } " text="Continue" :onClick="handle_click"></CustomButton>
      </div>
    </div>
  </template>
  
  <script>

  import router from '@/router';
  import OrderFrame from '../components/CartList/SiteOrderFrame.vue';
  import CustomButton from '../components/SiteSaveButton.vue';
  import UnderlinedHeader from '../components/general/SiteUnderlinedHeader.vue';

  export default {
    name: "CartListView",
    components: {
      OrderFrame,
      CustomButton,
      UnderlinedHeader
    },
    data() {
      return {
        isDisabled: false, // Initially enabled
        cartItems: [
          { name: "Gta V", price: 15.60 },
          { name: "Assassin's Creed Valhalla", price: 19.35 },
          { name: "The Witcher 3: Wild Hunt", price: 13.75 },
          { name: "Civilization VI", price: 26.36 },
        ],
        totalPrice: 0
        // count: 1
      };
    },
    created() {
    // Calculate the initial totalPrice by summing all prices in cartItems
    this.totalPrice = this.cartItems.reduce((accumulator, currentItem) => accumulator + currentItem.price, 0);
    },
    methods: {
      handleRemove(index, receivedPrice, count) {
        this.cartItems.splice(index, 1);
        const deduction = count * receivedPrice;
        this.totalPrice = Math.max(0, this.totalPrice - deduction);
        this.isDisabled = this.cartItems.length === 0; 
      },  

      handle_increment(receivedPrice, curPrice){
        this.totalPrice += receivedPrice;
        this.isDisabled = (curPrice === 0);
      },

      handle_decrement(receivedPrice, curPrice){
        this.totalPrice -= receivedPrice;

        this.totalPrice = Math.max(0, this.totalPrice);
        this.isDisabled = (curPrice === 0);
      },

      handle_click(){
        router.push('/shipping');
      }
    }
  }
  </script>
  
  <style scoped>
  h1 {
    margin-left: 15px;
    margin-right: 15px;
    padding-bottom: 5px;
    border-bottom: solid 1px;
  }
  
  .main-section{
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .view-section {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    
    background-color: #ffd500;
    width: 80%;
    min-height: 230px;

  }
  
  .cart-list {

    /* margin: 0 auto; */
    width: 90%;
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  
  .control-panel{
    background-color: rgb(255, 255, 255);
    /* max-width: 800px; */
    width: 80%;
    padding-top: 5px;
    padding-bottom: 15px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 50px;
    justify-content: right;
  }

  .custom-button{
    margin-right: 4px;
    width: 30%;
    /* padding: 15px 30px; /* Increase the padding to increase the height */
    /* font-size: 18px;  */
  }

  .disabled-button{
    opacity: 0.5; /* Example: Reduce opacity */
    cursor: not-allowed;
  }



  .back-button-div{
    width: 20%;
    display: flex;
    flex-direction: row;
    justify-content: left;

  }

  .price-continue-div{
    display: flex;
    flex-direction: row;
    justify-content: right;
    gap: 10px;
    width: 80%;
  }

  .total-price-frame {
    width: 70%;
    /* width: 80%; */
    display: flex;
    flex-direction: row;
    /* gap: 0px; */
    justify-content: right;
    align-items: center;
    background-color: #ffd500; /* Light gray background */
    padding: 10px 10px; 
    border-radius: 8px; /* Add rounded corners */
}

.total-price, .total-price-label {
    font-size: 20px;
}

.total-price{
  width: 35%;
}

.total-price-label {
  width: 65%;
}

.no-items-section {
    display: flex;
    padding: 100px;
    flex-direction: column; /* Set the direction to column to stack elements vertically */
    align-items: center; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
}

.no-items-label{
    font-size: 27px;
}

@media only screen and (max-width: 750px) {
  .control-panel{
    flex-direction: column;
    /* justify-content: center;
    align-items: center; */
  }

  .back-button-div{
    justify-content: center;
  }
}
  </style>