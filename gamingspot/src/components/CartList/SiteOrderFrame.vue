<template>
    <section class="order-frame">

        <label class="game-index"> {{ index }}.</label>
        <label class="game-name"> {{ name }}</label>

        
    
        <div class="game-price-frame">
            <label class="game-price">{{ modifiable_price.toFixed(2) }}€</label>
            <CountSelector class="count-selector" @increment-event="handleIncrement" @decrement-event="handleDecrement"/>
        </div>

        <img class="trash-icon" src="../../assets/icons/trash.png" @click="$emit('remove-event', this.count)">


        
    </section>
</template>

<script>
import CountSelector from '../SiteCountSelector.vue'

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
        }
    },
    components: {
        CountSelector
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

<style>
.order-frame {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin: 5px;
    /* margin-left: 20px;
    margin-right: 20px; */
    background-color: #CED1D9; /* Use a non-contrasting background color */
    gap: 15px;
    min-width: 70px;
    padding: 8px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for depth */
}

.game-index {
    font-size: 18px;
}

.game-name {
    flex: 1; /* Allow the game name label to take up remaining space */
    font-size: 20px;
    margin-left: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}


.game-price-frame {
    display: flex;
    flex-direction: row;
    align-items: center;

    gap: 15px;
    padding-left: 10px;
}

.game-price {
    font-size: 20px;
}

.count-selector {
    width: 40%;
}

.trash-icon {
    width: 27px;
    height: auto;
    cursor: pointer;
}
</style>