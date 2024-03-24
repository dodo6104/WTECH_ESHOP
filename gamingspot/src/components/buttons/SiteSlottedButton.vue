<template>
  <button :class="buttonClasses" @click="handleClick">
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
  computed: {
    buttonClasses() {
      return {
        'transitioned-button': true,
        'selected-button': this.isSelected
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



<style src="../../styles/buttons/SiteTransitionedButton.css"></style>

<style scoped>

  .transitioned-button{
    padding-left: 30px;
  }

</style>