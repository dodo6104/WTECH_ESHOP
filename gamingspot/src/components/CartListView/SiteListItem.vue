<template>
    <section class="order-frame">

        <div class="index-name-wrapper">
            <label class="game-index"> {{ index }}.</label>
            <label class="game-name"> {{ name }}</label>
        </div>
        
        
        <div class="order-control-panel">
            <div class="price-quantity-frame">
                <label class="game-price">{{ modifiable_price.toFixed(2) }}€</label>
                <QuantityCounter class="count-selector" @increment-event="handleIncrement" @decrement-event="handleDecrement"/>
            </div>

            <select class="select-widget">
                <option>KEY</option>
                <option>CD</option>
                <option>DVD</option>
                <option>ITEM</option>

            </select>

            <img class="trash-icon" src="../../assets/icons/trash.png" @click="$emit('remove-event', this.count)">

        </div>

        
    </section>
</template>

<script>
import QuantityCounter from '../general/SiteQuantityCounter.vue'

export default {    
    name: "OrderFrame",
    props: {
        index: {
            type: Number,
            required: true
        },
        name: {
            type: String,
            required: true
        },
        price: {
            type: Number,
            required: true
        },
        // form: {
        //     type: String,
        //     required: true
        // }
    },
    components: {
        QuantityCounter
    },
    data() {
        return {
            modifiable_price: this.price,
            count: 1
        }
    },
    methods: {
        handleIncrement() {
            this.modifiable_price += this.price; // Increment the price by the unit price
            this.count += 1;
            this.$emit('increment-event', this.price, this.modifiable_price); // Emit the increment-event with the price as an argument
        },
        handleDecrement() {
            this.modifiable_price -= this.price; // Decrement the price by the unit price
            this.count -= 1;
            this.modifiable_price = Math.max(0, this.modifiable_price);
            this.$emit('decrement-event', this.price, this.modifiable_price); // Emit the decrement-event with the price as an argument
        }
    }
}
</script>

<style src="../../styles/inputs/SiteSelectWidget.css"></style>;

<style>
.order-frame {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin: 5px;
    width: 90%;
    max-width: 800px;
    background-color: #CED1D9; 
    gap: 15px;
    padding: 8px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.index-name-wrapper{
    width: 65%;
    /* box-sizing: border-box; */ /* Content-box's height or width applies solely for elements, not
                                    for padding or border, border box is consistent.*/
    white-space: nowrap; /* Will not wrap the text if it exceeds its limits */
    overflow: hidden; /* Hides the text if it exceeds its limits */
    text-overflow: ellipsis; /* Inserts ellipsis (...) after text if it exceeds its limits */
}

.game-index {
    font-size: 18px;
}

.game-name {
    flex: 1;
    font-size: 20px;
    margin-left: 10px;
}

.order-control-panel{
    width: 35%;
    min-width: 200px;
    display: flex;
    flex-direction: row;
    justify-content: right;
    align-items: center;
}

.price-quantity-frame {
    width: 70%;

    display: flex;
    flex-direction: row;
    justify-content: right;
    align-items: center;

    gap: 15px;
    padding-left: 10px;
}

.game-price {
    font-size: 20px;
}

.count-selector {
    width: 50px;
}

.select-widget{
    min-width: 85px;
    max-width: 85px;
}

.trash-icon {
    width: 27px;
    height: auto;
    cursor: pointer;
    margin-left: 5px;
}

@media only screen and (max-width: 840px){
    .order-frame{
        flex-direction: column;
    }

    .order-control-panel{
        width: 100%;
    }

    .game-price-frame{
        max-width: 160px;
    }

    .index-name-wrapper{
        width: 100%;
    }
}

</style>