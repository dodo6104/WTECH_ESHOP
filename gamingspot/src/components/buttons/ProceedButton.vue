<template>


<section id="main_section">
    <button type="submit">Proceed</button>
                
</section>

</template>


<script>

export default {

props: {
    // text: String // Unique identifier for the input element
},

data() {

},

methods: {
    switchToOtherPanel() {
        this.$emit('switchToOther');
    },
}
}

</script>


<style scoped>

/* Styles for the button */
button[type="submit"] {
    width: 92%;
    height: 45px;
    padding: 10px;
    margin-top: 15px;
    margin-bottom: 35px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>