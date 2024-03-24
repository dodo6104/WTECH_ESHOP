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
    font-size: 24px;
}

.DescriptionContainer {
    max-width: 650px; /* Môže byť upravené podľa potreby */
    font-size: 14px;
    line-height: 1.5;
    text-align: justify;
}
</style>