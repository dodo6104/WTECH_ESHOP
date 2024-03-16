

<template>
    <section id="payment_methods">
        <div>
            <label>Payment Methods:</label>
            <img src="../assets/visa.png" alt="Visa Icon">
            <img src="../assets/mastercard.png" alt="MasterCard Icon">
            <img src="../assets/paypal.png" alt="PayPal Icon">
            <img src="../assets/paysafe.png" alt="PaySafe Icon">
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
#payment_methods {
    margin-top: 35px;
    padding: 15px;
    border-top: 1px solid #8d8c8c; /* Top border */
    border-bottom: 1px solid #8d8c8c; /* Bottom border */
    text-align: left;
    display: flex; /* Use flexbox to align items vertically */
    align-items: center; /* Center items vertically */
}

#payment_methods div {
    display: flex; /* Use flexbox to align label and image horizontally */
    align-items: center; /* Center items vertically */
}

img {
    width: 48px;
    height: 48px;
    margin-right: 10px; /* Add some space between the image and the label */
}

label {
    margin-right: 25px;
}

</style>