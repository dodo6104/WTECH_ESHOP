<template>
  <section class="main_section">

    <AccountMenuButton :text="'My Orders'" :isSelected="selectedButton === 'My Orders'" @selected="handleSelected"></AccountMenuButton>

    <AccountMenuButton :text="'Personal Data'" :isSelected="selectedButton === 'Personal Data'" @selected="handleSelected"></AccountMenuButton>

    <AccountMenuButton :text="'Payment Info'" :isSelected="selectedButton === 'Payment Info'" @selected="handleSelected"></AccountMenuButton>


    <div class="logout-option">
      <AccountMenuButton text="Log Out" @selected="logOut">
        <img class="logout-icon" src="../assets/icons/logout.png" />
      </AccountMenuButton>
    </div>
  </section>
</template>

<script>
import AccountMenuButton from './AccountMenuButton.vue';

export default {
  name: 'SiteAccount',
  props: {
    account_id: {
      type: String,
      required: true
    }
  },
  components: {
    AccountMenuButton
  },
  data() {
    return {
      selectedButton: null
    };
  },
  methods: {
    handleSelected(buttonText) {
      this.selectedButton = buttonText;
      
      if (buttonText === "My Orders") {
          // this.selectedComponent = MyOrders;
          this.$router.push(`/account=${this.account_id}/my_orders`)
          // this.$router.push('/account=${this.account_id}/my_orders')
      } else if (buttonText === "Personal Data") {
          // this.selectedComponent = PersonalData;
          this.$router.push(`/account=${this.account_id}/personal_data`)
      } else if (buttonText === "Payment Info") {
          // this.selectedComponent = PaymentInfo;
          this.$router.push(`/account=${this.account_id}/payment_info`)
      }
    },
    logOut(){
      this.$router.push('/')
    }
  }
};
</script>

<style scoped>
/* styles remain the same */

  .main_section {
    display: flex;
    flex-direction: column;
    

    gap: 5px;
    background-image: linear-gradient(to bottom, #003366, #0099ff);
    min-width: 270px;
    max-width: 300px;
  
  
    height: 100vh;
    text-align: center;
    border-right: 1px solid #8d8c8c;
    background-color: #7aeaf0;
  }

  .logout-option{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
 
  }
  .logout-icon{
    width: 25px;
    height: 25px;
  }

  </style>