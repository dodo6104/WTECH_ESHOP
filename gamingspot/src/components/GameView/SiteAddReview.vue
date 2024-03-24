<template>
<div class="AddRevieSection">
    <textarea class="AddReview" maxlength="500" v-model="text"></textarea>
        <div class="CounterAndButtonSection">
        <div>{{ charCount }}/500</div>
        <div class="AddReviewInStars">
            <AddReviewStars :fontsize = "'214px'"/>
            <button class="AddRevieButton">Add Review</button>
        </div>
    </div>
</div>
    
</template>
        
<script>
import AddReviewStars from '../../components/GameView/SiteAddReviewStars.vue';

export default {
    data() {
        return {
        text: '',
        };
    },
    name: 'SiteGamePicture',
    components: {
        AddReviewStars,
    },
    computed: {
        charCount() {
            console.log(this.text.length)
            return this.text.length;
        }
    }
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
    padding-right: 20px;
}

.AddRevieButton {
    border-radius: 20px;
    height: 40px;
    background-color: rgb(0, 0, 0);
    color: white;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;
    cursor: pointer;
    transition: background-color 0.5s ease;
}

.AddRevieButton:hover {
    background-color: rgb(0, 0, 0, 0.8);;
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