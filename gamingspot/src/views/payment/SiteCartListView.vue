<template>
    
  
    <section class="main-section">
       
        <div class="content-section">
          <UnderlinedHeader text="Cart List"></UnderlinedHeader>
            
    
            
            <!-- This dynamically loads the items from cartItems and assigns unique keys to them, which are provided when remove-event is
                caught so that the item which emitted the event can be identified and removed. -->
            <div class="cart-list">

              <div class="no-items-section" v-if="cartItems.length === 0">
                    <label  class="no-items-label" >Nothing in cart :(</label>
              </div>
                
              <CartListItem v-for="(item, index) in cartItems" :key="item.name" :index="index + 1" :name="item.name" :price="item.price" @remove-event="(count) => handleRemove(index, item.price, count)"
                  @increment-event="handle_increment" @decrement-event="handle_decrement"></CartListItem>
              
              
              <div class="total-price-wrapper">

                <div class="total-price-frame">
                  <div>
                    <label class="total-price-label" for=".total-price">Total:</label>
                  </div>

                  <div>
                    <label class="total-price">{{totalPrice.toFixed(2)}}€</label>
                </div>
              </div>
            </div>
              
            </div>

            

            
        </div>

    </section>


    <div class="control-panel">
        <button class="submit-button" type="submit" :onClick="toPrevSection">Back</button>
        <button :class="{'submit-button-disabled': isDisabled, 'submit-button': !isDisabled}" type="submit" text="Continue" :onClick="handle_click">Continue</Button>
    </div>
  </template>
  
  <script>

  import router from '@/router';
  import CartListItem from '../../components/CartListView/SiteListItem.vue';
  // import CustomButton from '../../components/buttons/SiteSaveButton.vue';
  import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';

  export default {
    name: "CartListView",
    components: {
      CartListItem,
      // CustomButton,
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
      },

      toPrevSection(){
        router.push('/')
      }
      
    }
  }
  </script>
  
  <style src="../../styles/sections/main_section.css"></style>;
  <style src="../../styles/sections/content_section.css"></style>;
  <style src="../../styles/buttons/SiteSubmitButton.css"></style>;
  <style src="../../styles/sections/SiteLowerControlPanel.css"></style>;

  <style scoped>
  
  .cart-list {
    /* background-image: linear-gradient(to top, #1900ff, #021163); */
    width: 90%;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    
    padding-top: 3px;
    padding-bottom: 3px;
    margin-bottom: 10px;
  }
  

  .back-button-div{

    display: flex;
    flex-direction: row;
    justify-content: left;

  }

  .price-continue-div{
    display: flex;
    flex-direction: row;
    justify-content: right;
    gap: 10px;

  }

  .total-price-wrapper{
    /* background-color: red; */
    min-width: 300px;
    max-width: 800px;
    display: flex;
    justify-content: right;
    width: 90%;
    
    /* padding-right: 204px; */
  }

  .total-price-frame {
    margin-right: 127px;
    /* background-color: red; */

    width: 200px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background-color: #ff7700;
    padding: 10px 10px; 
    margin-bottom: 8px;
}

.total-price, .total-price-label {
    font-weight: bold;
    font-size: 20px;
}

.total-price{
  width: 50%;
}

.total-price-label {
  width: 50%;
  color: white;
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

@media only screen and (max-width: 600px) {
  .control-panel{
    flex-direction: column;
    gap: 5px;
  }

  .back-button-div{
    justify-content: center;
  }
}

@media only screen and (max-width: 600px) {
    .cart-list{
      max-width: 450px;
    }

    .total-price-frame{
      margin-left: 16px;
    }
}

  </style>