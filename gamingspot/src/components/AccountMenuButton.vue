<template>
  <button :class="{ 'custom-button': true, 'selected-button': isSelected }" @click="handleClick">
    <div class="button-content">
      
  
    <span class="button-label">{{ text }} </span>
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
    isSelected: {
      type: Boolean,
      required: true
    }
  },
  methods: {
    handleClick() {
      this.$emit('selected', this.text);
    }
  }
};
</script>


<style scoped>
.custom-button {
  width: 100%;
  max-height: 80px;
  /* height: 100%; */
  background-color: #0470dc;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 27px;
  cursor: pointer;
  border-radius: 2px;
  transition: background-color 0.3s ease; /* Add transition effect */
}

.button-label{
  font-weight: bold;
  font-size: 30px;
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