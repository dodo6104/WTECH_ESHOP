<template>
  <section id="main_section">
    <div>
      <AccountMenuButton :text="'My Orders'" :isSelected="selectedButton === 'My Orders'" @selected="handleSelected"></AccountMenuButton>
    </div>
    <div>
      <AccountMenuButton :text="'Personal Data'" :isSelected="selectedButton === 'Personal Data'" @selected="handleSelected"></AccountMenuButton>
    </div>
    <div>
      <AccountMenuButton :text="'Payment Information'" :isSelected="selectedButton === 'Payment Information'" @selected="handleSelected"></AccountMenuButton>
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
      } else if (buttonText === "Payment Information") {
          // this.selectedComponent = PaymentInfo;
          this.$router.push(`/account=${this.account_id}/payment_info`)
      }
    }
  }
};
</script>

<style scoped>
/* styles remain the same */

  #main_section {
    width: 300px;
    height: 400px;
    text-align: center;
    border-right: 1px solid #8d8c8c;
    background-color: #7aeaf0;
  }
  </style>