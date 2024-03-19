<template>
    <div class="review">
        <div class="UsernameAndStars">
            <StarRating :rating="100" :ratingfont="'24px'" class="UserStars"/>
            <div class="username">dodo6104</div>
        </div>
        <div class="review-text">
            Toto je text recenzie text recenzie. Tu môže text recenzie. Tu môže byť uvede text recenzie. Tu môže byť uvede byť uvede text recenzie. Tu môže byť uvede. Tu môže byť uvedený podrobný názor užívateľa na produkt, službu alebo skúsenosť. Užívateľ môže spomenúť, čo sa mu páčilo, čo by mohlo byť lepšie, a či by odporučil toto ostatným.
        </div>
    </div>
</template>
    
<script>
import StarRating from './SiteStarRating.vue';


export default {
name: 'SiteReview',
components: {
    StarRating,
}
}
</script>
    
<style>
.review {
    text-align: justify;
    line-height: 1.5;
    font-size: 14px;
    padding-bottom: 2%;
    border: 1px solid #dddddd; 
    background-color: #f9f9f9;
    border-radius: 8px; 
    box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
    padding: 10px;
}

.username {
    font-weight: bold;
    margin-right: 2%;
    font-size: 16px;
}

</style>