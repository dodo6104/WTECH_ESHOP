<template>
    <div class="VideoContainer">
        <iframe :width = videowidth :height = videoheight :src="`https://www.youtube.com/embed/${videoUrl}`" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</template>
    
<script>
    
export default {
name: 'SiteGameVideo',
props: {
    videoUrl: {
        type: String,
        required: true
    },
    videowidth: {
        type: String,
        required: true
    },
    videoheight: {
        type: String,
        required: true
    }
}
}
</script>
    
<style>

</style>