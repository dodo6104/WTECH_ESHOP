<template>
    <div class="ShoppingPanel">
    <div class="LeftSection">
        <div class="NameSelectors">Type of game</div>
            <select class = "Selector" id="type-of-game">
                <option value="classic-key">Classic Key</option>
            </select>
            <div class="price-section">
                <div class="Price">
                    <div class="Price-Value">{{ newPriceValue }} $</div>
                    <div class="Old-Price-Value"  v-if="oldPriceValue !== newPriceValue"><del>{{ oldPriceValue }} $</del></div>
                </div>
            <div class="Discount" v-if="oldPriceValue !== newPriceValue">-{{ discount }} %</div>
        </div>
    </div>
    <div class="RigthSection">
        <div class="NameSelectors">Platform</div>
        <select class="Selector" id="platform">
            <option v-for="platform in platforms" :key="platform" :value="platform">{{ platform }}</option>
        </select>
        <div class="AddButtonContainer"><button class="AddToCartButton">Add to Cart</button></div>
    </div>
</div>
</template>
    
<script>
    
export default {
    name: 'SiteShoppingPanel',
    props: {
        oldPriceValue: {
            type: Number,
            required: true
        },
        newPriceValue: {
            type: Number,
            required: true
        },
        platforms: Array,

    },
    computed: {
        discount() {
            const discountValue = 100 - (this.newPriceValue / this.oldPriceValue * 100);
            if (Math.round(discountValue) === 0) return 1;
            return Math.round(discountValue); 
        }
    }
}
</script>
    
<style>
.ShoppingPanel {
    display: flex;
    max-width: 650px;
    justify-content: space-between;
}

.LeftSection {
    display: block;
    padding-right: 10px;
}

.NameSelectors {
    font-size: 13px;
    color: rgba(0, 0, 0, 0.5);
    margin-top: 5px;
}

.Selector {
    width: 250px;
    height: 38px;
    margin-bottom: 5px;
}

.price-section {
    display: flex;
    gap: 20px
}

.Price-Value {
    font-size: 30px;
    font-weight: bold;
}

.Old-Price-Value {
    font-size: 16px;
}

.Discount {
    display: flex;
    align-items: center;
    font-size: 32px;
    font-weight: bold;
}

.RigthSection {
    display: block;
}

.AddButtonContainer {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.AddToCartButton {
    width: 200px;
    height: 40px;
    background-color: grey;
    border-radius: 20px;
    font-size: 28px;
    font-weight: bold;
}
</style>