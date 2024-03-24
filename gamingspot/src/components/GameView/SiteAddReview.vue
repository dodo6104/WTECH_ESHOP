<template>
<div class="AddRevieSection">
    <textarea class="AddReview" maxlength="300"></textarea>
        <div class="CounterAndButtonSection">
        <div>0/300</div>
        <div class="AddReviewInStars">
            <AddReviewStars />
            <button class="AddRevieButton">Add Review</button>
        </div>
    </div>
</div>
    
</template>
        
<script>
import AddReviewStars from '../../components/GameView/SiteAddReviewStars.vue';

export default {
name: 'SiteGamePicture',
components: {
    AddReviewStars,
},
}
</script>

<style>
.AddRevieSection{
    display: flex;
    flex-direction: column;

}
.CounterAndButtonSection {
    display: flex;
    justify-content: space-between;
}

.AddReviewInStars {
    display: flex;
    align-content: center;
}

.AddRevieButton {
    border-radius: 20px;
    width: 100px;
    height: 30px;
    align-self: flex-end;
    background-color: black;
    color: white;
}

textarea.AddReview {
    width: calc(100% - 20px);
    height: 100px;
    resize: none;
    overflow-y: auto;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.5;
    padding: 10px; 
}

.AddReviewInStars {
    display: grid;
}
</style>