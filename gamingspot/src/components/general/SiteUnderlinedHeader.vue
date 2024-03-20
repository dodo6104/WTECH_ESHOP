
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
        border-bottom: 1px solid;
        padding-bottom: 5px;
        /* padding-left: 25px; */
        margin-top: 10px;
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 20px;
    }

    .header {
        font-size: 33px;

    }
</style>