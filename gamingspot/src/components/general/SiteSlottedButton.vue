<template>
    <button 
      :class="{ 'custom-button': true, 'selected-button': isSelected, 'click-hold': clickHold }" 
      @click="handleClick"
      @mousedown="handleMouseDown"
      @mouseup="handleMouseUp"
      @mouseleave="handleMouseLeave"
    >
      <div class="button-content">
        <span>{{ text }}</span>
        <slot></slot>
      </div>
    </button>
  </template>
  
  <script>
  export default {
    props: {
      text: {
        type: String,
        required: true
      },
      index: {
        type: String,
        required: true
      },
      isSelected: {
        type: Boolean,
        required: true
      }
    },
    data() {
      return {
        clickHold: false,
        holdTimeout: null
      };
    },
    methods: {
      handleClick() {
        this.$emit('button-selected', this.index);
      },
      handleMouseDown() {
        this.clickHold = true;
        this.holdTimeout = setTimeout(() => {
          // Implement your hold action here
          console.log("Button held!");
        }, 500); // Adjust hold duration as needed
      },
      handleMouseUp() {
        clearTimeout(this.holdTimeout);
        this.clickHold = false;
      },
      handleMouseLeave() {
        clearTimeout(this.holdTimeout);
        this.clickHold = false;
      }
    }
  };
  </script>
  
  <style scoped>
  .custom-button {
    background-color: #09afd8;
    color: white;
    text-align: center;
    display: inline-block;
    font-size: 27px;
    cursor: pointer;
    border-radius: 2px;
    transition: background-color 0.3s ease; /* Add transition effect */
  }
  
  .selected-button {
    background-color: #020675;
  }
  
  .button-content {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 15px;
    align-items: center;
  }
  
  .custom-button:hover {
    background-color: #020675;
  }
  
  .click-hold {
    background-color: #3a3a3a; /* Change to your desired click-and-hold color */
  }
  </style>