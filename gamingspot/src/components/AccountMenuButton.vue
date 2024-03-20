<template>
  <button :class="{ 'custom-button': true, 'selected-button': isSelected }" @click="handleClick">
    <div class="button-content">
      
  
    <span>{{ text }} </span>
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
  height: 100%;
  background-color: #09afd8;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 27px;
  cursor: pointer;
  border-radius: 2px;
}

.selected-button {
  background-color: #020675;
}

.button-content {
  display: flex;
  flex-direction: row;
  justify-content: center;
  gap: 15px;
  align-items: center;
}

.custom-button:hover {
  background-color: #020675; /* Change to your desired hover color */
}
</style>