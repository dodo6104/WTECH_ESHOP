<template>
    <div class="star-rating" :style="starRatingStyle">
      <div class="star-background">★★★★★</div>
      <div class="star-foreground" :style="starForegroundStyle">★★★★★</div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      rating: {
        type: Number,
        required: true
      },
      ratingfont: {                                                               
        type: String,
        required: true
      }
    },
    computed: {
      starRatingStyle() {
        return {
          position: 'relative',
          display: 'inline-block',
          fontSize: this.ratingfont
        };
      },
      starForegroundStyle() {
        return {
          position: 'absolute',
          top: 0,
          left: 0,
          overflow: 'hidden',
          width: `${this.rating}%`,
          color: 'goldenrod',
          whiteSpace: 'nowrap'
        };
      }
    }
  }
  </script>
  
  <style>
  
  </style>
  