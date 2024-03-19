<template>
<div class="GameImageContainer">
    <img :src="pictureUrl" alt="Description of Image">
</div>

</template>
    
<script>
    
export default {
name: 'SiteGamePicture',
props: {
    pictureUrl: {
        type: String,
        required: true
    }
},
}
</script>
    
<style>
.GameImageContainer {
    flex: 0 0 auto;
    display: flex;
    max-width: 350px;
    max-height: 350px;
    margin-right: 20px;
}
</style>