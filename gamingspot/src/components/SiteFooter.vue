

<template>
    <section id="payment_methods">

    <div class="payment-method">
        <label for="visa">Payment Methods:</label>
        <img src="../assets/icons/visa.png" alt="Visa Icon" id="visa">
        <img src="../assets/icons/mastercard.png" alt="MasterCard Icon" id="mastercard">
        <img src="../assets/icons/paypal.png" alt="PayPal Icon" id="paypal">
        <img src="../assets/icons/paysafe.png" alt="PaySafe Icon">
    </div>
 

    </section>

    <section id="authors_copyright">
        <p>&copy; 2024 GamingSpot. All rights reserved.</p>
        <p>Designed by The Mojto Brothers</p>

    </section>

</template>


<script>

</script>


<style scoped>


.payment-method {
    margin-top: 30px;
    text-align: center;
    display: inline-block;
    margin-right: 20px;
    vertical-align: middle; /* Align elements vertically */
    width: 100%;
    padding-top: 15px;
    padding-bottom: 15px;
    border-top: 1px solid #8d8c8c;
    border-bottom: 1px solid #8d8c8c;
}

.payment-method img {
    width: 48px;
    height: 48px;
    margin-right: 5px;
    vertical-align: middle; /* Align elements vertically */
}

.payment-method label {
    margin-right: 35px;
    vertical-align: middle; /* Align elements vertically */
}

#authors_copyright{
    text-align: center;
}
</style>