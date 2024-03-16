<template>
    <section id="main_section">
      <div>
        <AccountMenuButton ref="myOrdersBtn" text="My Orders" @selected="handle_selected"></AccountMenuButton>
      </div>
      <div>
        <AccountMenuButton ref="personalDataBtn" text="Personal Data" @selected="handle_selected"></AccountMenuButton>
      </div>
      <div>
        <AccountMenuButton ref="paymentInfoBtn" text="Payment Information" @selected="handle_selected"></AccountMenuButton>
      </div>
    </section>
  </template>
  
  <script>
  import AccountMenuButton from './AccountMenuButton.vue'
  
  export default {
    name: 'SiteAccount',
    components: {
      AccountMenuButton
    },
    methods: {
      handle_selected(buttonText) {
        // Reset isSelected property for all buttons
        Object.values(this.$refs).forEach(button => {
          if (Object.prototype.hasOwnProperty.call(button, 'isSelected')) {
            button.isSelected = false;
          }
        });
  
        // Accessing the button ref based on the buttonText
        if (buttonText === "My Orders") {
          this.$refs.myOrdersBtn.isSelected = true;
        } else if (buttonText === "Personal Data") {
          this.$refs.personalDataBtn.isSelected = true;
        } else if (buttonText === "Payment Information") {
          this.$refs.paymentInfoBtn.isSelected = true;
        }

        this.$emit('selected-button', buttonText);
      }
    }
  }
  </script>
  
  <style scoped>
  #main_section {
    width: 300px;
    height: 400px;
    text-align: center;
    border-right: 1px solid #8d8c8c;
    background-color: #7aeaf0;
  }
  </style>