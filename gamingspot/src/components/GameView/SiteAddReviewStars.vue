<template>
  <div ref="trackingArea" class="star-rating" :style="starRatingStyle" @mousemove="printMousePosition" @click="handleClick" @mouseenter="handleMouseEnter" @mouseleave="handleMouseLeave">
    <div class="star-background">★★★★★</div>
    <div class="star-foreground" :style="starForegroundStyle()">★★★★★</div>
    <div class="star-final" :style="starFinalStyle">★★★★★</div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      foregroundWidth: '0%',
      finalWidth: '0%',
      isMouseOver: false, // Nový stavový indikátor pre sledovanie, či je kurzor nad divom
    };
  },
  methods: {
    printMousePosition(event) {
      if (this.isMouseOver) { // Aplikuj logiku len ak je kurzor nad divom
        const { left, width } = this.$refs.trackingArea.getBoundingClientRect();
        const cursorPosition = event.clientX - left;
        const cursorPercentage = (cursorPosition / width) * 100;
        this.foregroundWidth = `${Math.min(Math.max(cursorPercentage, 0), 100)}%`;
      }
    },
    handleClick() {
      this.finalWidth = this.foregroundWidth;
    },
    handleMouseEnter() {
      this.isMouseOver = true; 
    },
    handleMouseLeave() {
      this.isMouseOver = false; 
      this.foregroundWidth = '0%';
    }
  },
  computed: {
    starRatingStyle() {
      return {
        position: 'relative',
        display: 'inline-block',
        fontSize: this.ratingfont,
        userSelect: 'none',
      };
    },
    starForegroundStyle() {
      return () => ({
        position: 'absolute',
        top: 0,
        left: 0,
        overflow: 'hidden',
        width: this.foregroundWidth,
        color: this.isMouseOver ? 'rgba(218, 165, 32, 0.8)' : 'transparent',
        whiteSpace: 'nowrap',
      });
    },
    starFinalStyle() {
      return {
        position: 'absolute',
        top: 0,
        left: 0,
        overflow: 'hidden',
        width: this.finalWidth,
        color: 'goldenrod',
        whiteSpace: 'nowrap',
        pointerEvents: 'none',
      };
    }
  },
  props: {
    rating: {
      type: Number,
      required: true
    },
    ratingfont: {                                                               
      type: String,
      required: true
    }
  }
}
</script>

<style>
.star-rating{
  font-size: 30px;
}

</style>
