<template>
<h1>{{ nameOfTheGame }}</h1>
<div class="DescriptionContainer">
    {{ textOfDescription }}
</div>

</template>
  
<script>
  
export default {
name: 'SiteGameInfo',
props: {
    nameOfTheGame: {
        type: String,
        required: true
    },
    textOfDescription: {
        type: Text,
        required: true
    }
},
}
</script>
  
<style>
h1 {
    margin: 0;
}

.DescriptionContainer {
    width: 650px; /* Môže byť upravené podľa potreby */
    max-height: 150px;
    padding: 5px;
    font-size: 14px;
    line-height: 1.5;
    text-align: justify;
}
</style>