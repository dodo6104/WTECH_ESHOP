
<template>
    <div class="header-section">
        <h1 class="header">{{ text }}</h1>
    </div>
</template>


<script>

    export default{
        name: "UnderlinedHeader",
        props: {
            text: {
                type: String, 
                required: true
            }
        }
    }
</script>

<style scoped>
    .header-section {
        justify-content: left;
        border-bottom: 3px solid;
        padding-bottom: 5px;
        /* padding-left: 25px; */
        /* background-color: green; */
        margin-top: 10px;
   
        margin-bottom: 20px;
        width: 97%;
    
    }

    .header {
        font-size: 33px;
    }
</style>