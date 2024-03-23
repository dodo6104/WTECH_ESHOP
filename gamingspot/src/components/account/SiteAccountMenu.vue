<template>
  <div class="account-menu">

    <div class="option-row">
    <SlottedButton :text="'My Orders'" index="1" :isSelected="selectedButton === '1'" @button-selected="handleSelected" buttonStyle="primary"></SlottedButton>
    <SlottedButton :text="'Personal Data'" index="2" :isSelected="selectedButton === '2'" @button-selected="handleSelected" buttonStyle="primary"></SlottedButton>
    </div>

    <div class="option-row">
      <SlottedButton :text="'Payment Info'" index="3" :isSelected="selectedButton === '3'" @button-selected="handleSelected" buttonStyle="primary"></SlottedButton>


      <div class="logout-option">
        <SlottedButton text="Log Out" @button-selected="logOut" image_src="../../assets/icons/logout.png" buttonStyle="primary">
          <img class="logout-icon" src="../../assets/icons/logout.png" />
        </SlottedButton>
      </div>
    </div>
  </div>
</template>

<script>
import SlottedButton from '../buttons/SiteSlottedButton.vue';

export default {
  name: 'SiteAccount',
  props: {
    account_id: {
      type: String,
      required: true
    },
    selectedIndex: {
      type: String,
      required: false,
      default: "1"
    }
  },
  components: {
    SlottedButton
  },
  data() {
    return {
      selectedButton: this.selectedIndex
    };
  },
  methods: {
    handleSelected(index) {
      this.selectedButton = index;
      
      if (index === "1") {
          // this.selectedComponent = MyOrders;
          this.$router.push({
            name: 'MyOrders',
            params: { y: this.account_id },
            query: { selected_button: index }
          });
          // this.$router.push('/account=${this.account_id}/my_orders')
      } else if (index === "2") {
          // this.selectedComponent = PersonalData;
          this.$router.push({
            name: 'PersonalData',
            params: { z: this.account_id },
            query: { selected_button: index }
          });
      } else if (index === "3") {
          // this.selectedComponent = PaymentInfo;
          this.$router.push({
            name: 'PaymentInfo',
            params: { u: this.account_id },
            query: { selected_button: index }
          });
      }
    },

    logOut(){
      this.$router.push('/')
    }
  }
};
</script>

<style src="../../styles/sections/SiteAccountMenu.css"></style>