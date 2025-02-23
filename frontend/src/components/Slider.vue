<script setup lang="ts">
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/pagination";

import { Autoplay } from "swiper/modules";
import { computed, ref } from "vue";
import type { ImageInterface } from "./Hero.vue";

const props = defineProps<{
  hero_images?: ImageInterface[],
}>();

const images = computed(() => [...(props.hero_images ?? []), ...(props.hero_images ?? [])]);

const swiperOptions = ref({
  direction: "vertical",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 2,
  loop: true,
  autoplay: {
    delay: 3000,
  },
});
</script>

<template>
  <div class="flex justify-center items-center">
    <Swiper v-bind="swiperOptions" :modules="[Autoplay]" class="h-96 md:h-[500px]">
      <SwiperSlide v-for="(image, index) in images" :key="index">
        <img :src="'http://localhost:8000/storage/' + image.image" alt="Slide Image"
          class="transition-all duration-500 w-full h-full md:h-60 object-cover shadow-lg" />
      </SwiperSlide>
    </Swiper>
  </div>
</template>

<style scoped>
::v-deep(.swiper-slide) {
  transition: transform 0.5s, opacity 0.5s;
  scale: 0.8;
  opacity: 0.5;
}

::v-deep(.swiper-slide-active) {
  scale: 1.2;
  opacity: 1;
  z-index: 20;
}

::v-deep(.swiper-slide-prev),
::v-deep(.swiper-slide-next) {
  scale: 0.8;
  opacity: 0.7;
}
</style>
