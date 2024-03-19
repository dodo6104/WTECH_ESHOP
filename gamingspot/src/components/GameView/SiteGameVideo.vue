<template>
    <div class="VideoContainer">
        <iframe width="600" height="310" :src="`https://www.youtube.com/embed/${videoUrl}`" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
.VideoContainer {
    margin-right: 20px;
}
</style>