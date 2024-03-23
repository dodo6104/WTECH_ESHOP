<!-- CustomButton.vue -->
<template>
  <button 
    :class="buttonClasses"
    @click="handleClick"
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
    },
    // Additional props for customization
    buttonStyle: {
      type: String,
      default: 'primary' // Default style
    }
  },
  computed: {
    buttonClasses() {
      return {
        'transitioned-button': true,
        'selected-button': this.isSelected,
        // Apply different styles based on buttonStyle prop
        'custom-button-primary': this.buttonStyle === 'primary',
        'custom-button-secondary': this.buttonStyle === 'secondary',
        // Add more conditions for different styles
      };
    }
  },
  methods: {
    handleClick() {
      this.$emit('button-selected', this.index);
    }
  }
};
</script>

<style src="../../styles/buttons/SiteTransitionedButton.css">
</style>


<style scoped>


.custom-button-primary {
  /* background-color: red; */
  padding-left: 30px;
  /* Styles for primary button */
}

.custom-button-secondary {
  /* Styles for secondary button */
}
/* Define more styles as needed */
</style>