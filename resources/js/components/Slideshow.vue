<template>
  <div class="eg-slideshow">
    <slide
      v-for="i in num"
      :key="i"
      :enterNext="[i === 1 && currentSlideIndex === 1 ? '' : 'slideInRight']"
      enterPrev="slideInLeft"
      leaveNext="slideOutLeft"
      leavePrev="slideOutRight"
      class="fast"
    >
      <img :src="`/img/works/${name}_${i}.png`" :alt="`${name}_${i}`" class="img" />
    </slide>
    <div class="dots">
      <div class="prev" @click="previousStep()">
        <div class="arrow" v-if="num > 1"></div>
      </div>
      <div class="dot-wrapper" v-for="i in num" :key="i">
        <div class="dot" :class="{active: i === currentSlideIndex}"></div>
      </div>
      <div class="next" @click="nextStep()">
        <div class="arrow" v-if="num > 1"></div>
      </div>
    </div>
  </div>
</template>
<script>
import { Slideshow } from "eagle.js";
export default {
  mixins: [Slideshow],
  props: {
    name: {
      required: true,
      Type: String
    },
    num: {
      required: true,
      Type: Number
    }
  },
  mounted() {
    this.currentSlideIndex = 1;
    const hammer = new Hammer(this.$el);
    hammer.on("swiperight", () => {
      this.previousStep();
    });
    hammer.on("swipeleft", () => {
      this.nextStep();
    });
  }
};
</script>