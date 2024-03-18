<template>
    <div class="main-frame">
      <label class="count">{{ modifiedValue }}</label>
      <div class="modifiers">
        <img class="incrementor" src="../assets/icons/arrowhead-up.png" @click="increment">
        <img class="decrementor" src="../assets/icons/arrowhead-down.png" @click="decrement">
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "CountSelector",
    props: {
      value: {
        type: Number,
        required: false,
        default: 1
      },
      min_value: {
        type: Number,
        required: false,
        default: 0
      },
      max_value: {
        type: Number,
        required: false,
        default: 99
      }
    },
    data() {
      return {
        modifiedValue: this.value // Create a copy of the prop and use it for modification
      };
    },
    methods: {
      increment() {
        
        if(this.modifiedValue < this.max_value){
            this.modifiedValue += 1; // Modify the copied value
            this.$emit('increment-event')
        }
      },
      decrement() {

        if(this.modifiedValue > this.min_value){
            this.modifiedValue -= 1; // Modify the copied value
            this.$emit('decrement-event')
        }

      }
    }
  };
  </script>
  
  <style>
  .main-frame {
    background-color: rgb(159, 160, 160);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: right;
    gap: 6px;
    padding-left: 4px;
  }
  .modifiers {
    display: flex;
    flex-direction: column;
  }
  .count {
    font-size: 20px;
  }
  .incrementor,
  .decrementor {
    width: 20px;
    height: auto;
    cursor: pointer;
  }
  </style>