<template>
    <h1>Cart List</h1>
    
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
                
                <OrderFrame v-for="(item, index) in cartItems" :key="item.name" :name="item.name" :price="item.price" @remove-event="() => handleRemove(index, item.price)"
                    @increment-event="handle_increment" @decrement-event="handle_decrement"></OrderFrame>
            </section>
        </div>

    </section>


    <div class="control-panel">
        
        <div class="total-price-frame">
            <label class="total-price-label" for=".total-price">Total Price:</label>
            <label class="total-price">{{totalPrice.toFixed(2)}}€</label>
        </div>
        
        <CustomButton class="custom-button" text="Continue"></CustomButton>
        
    </div>
  </template>
  
  <script>
  import OrderFrame from '../components/CartList/SiteOrderFrame.vue';
  import CustomButton from '../components/SiteSaveButton.vue';

  export default {
    name: "CartListView",
    components: {
      OrderFrame,
      CustomButton
    },
    data() {
      return {
        cartItems: [
          { name: "Gta V", price: 15.60 },
          { name: "Assassin's Creed Valhalla", price: 19.35 },
          { name: "The Witcher 3: Wild Hunt", price: 13.75 },
          { name: "Civilization VI", price: 26.36 },
        ],
        totalPrice: 0
      };
    },
    created() {
    // Calculate the initial totalPrice by summing all prices in cartItems
    this.totalPrice = this.cartItems.reduce((accumulator, currentItem) => accumulator + currentItem.price, 0);
    },
    methods: {
      handleRemove(index, receivedPrice) {
        this.cartItems.splice(index, 1);
        this.totalPrice -= receivedPrice;
      },

      handle_increment(receivedPrice){
        this.totalPrice += receivedPrice;
      },

      handle_decrement(receivedPrice){
        this.totalPrice -= receivedPrice;
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
    width: 800px;
    min-height: 230px;

  }
  
  .cart-list {

    /* margin: 0 auto; */
    width: 800px;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  
  .control-panel{
 
    max-width: 800px;
    padding-top: 15px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 15px;
    justify-content: right;
  }

  .custom-button{
    margin-right: 20px;
  }

  .total-price-frame {
    display: flex;
    flex-direction: row;
    gap: 15px;
    align-items: center;
    background-color: #ffd500; /* Light gray background */
    padding: 10px 20px; /* Add some padding for better spacing */
    border-radius: 8px; /* Add rounded corners */
}

.total-price, .total-price-label {
    font-size: 20px;
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

  </style>