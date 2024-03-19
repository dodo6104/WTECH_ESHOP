<template>
    <div class="VideoContainer">
        <iframe width="550" height="310" :src="`https://www.youtube.com/embed/${videoUrl}`" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</template>
    
<script>
    
export default {
name: 'SiteGameVideo',
props: {
    videoUrl: {
        type: String,
        required: true
    }
}
}
</script>
    
<style>

</style>