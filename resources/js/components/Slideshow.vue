<template>
  <div class="eg-slideshow">
    <slide
      v-for="i in num"
      :key="i"
      :enter-next="[i === 1 && currentSlideIndex === 1 ? '' : 'slideInRight']"
      enter-prev="slideInLeft"
      leave-next="slideOutLeft"
      leave-prev="slideOutRight"
      class="fast"
    >
      <img
        :src="`/img/works/${name}_${i}.png`"
        :alt="`${name}_${i}`"
        class="img"
      />
    </slide>
    <div class="dots">
      <div class="prev" @click="previousStep()">
        <div v-if="num > 1" class="arrow"></div>
      </div>
      <div v-for="i in num" :key="i" class="dot-wrapper">
        <div class="dot" :class="{ active: i === currentSlideIndex }"></div>
      </div>
      <div class="next" @click="nextStep()">
        <div v-if="num > 1" class="arrow"></div>
      </div>
    </div>
  </div>
</template>
<script>
import Hammer from "hammerjs";
import { Slideshow } from "eagle.js";
export default {
  mixins: [Slideshow],
  props: {
    name: {
      required: true,
      type: String
    },
    num: {
      required: true,
      type: Number
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
