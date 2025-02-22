<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/effect-coverflow";
import "swiper/css/pagination";
import banner1 from "@/assets/img/banner-1.jpg"
import banner2 from "@/assets/img/banner-2.jpg"
import banner3 from "@/assets/img/banner-3.jpg"

import { Autoplay } from "swiper/modules";

const images = [
  banner1,
  banner2,
  banner3,
  banner1,
  banner2,
  banner3,
];

const swiperOptions = {
  direction: "vertical",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 2,
  loop: true,
  autoplay: {
    delay: 3000,
  },
};
</script>

<template>
  <div class="flex justify-center items-center">
    <Swiper v-bind="swiperOptions" :modules="[Autoplay]" class="h-96 md:h-[500px]">
      <SwiperSlide v-for="(image, index) in images" :key="index" class="slide">
        <img :src="image" alt="Slide Image"
          class="transition-all duration-500 w-full h-full md:h-60 object-cover shadow-lg" />
      </SwiperSlide>
    </Swiper>
  </div>
</template>

<style scoped>
/* Semua slide default lebih kecil & transparan */
:deep(.swiper-slide) {
  transition: transform 0.5s, opacity 0.5s;
  scale: 0.8;
  opacity: 0.5;
}

/* Slide yang aktif di tengah lebih besar & jelas */
:deep(.swiper-slide-active) {
  scale: 1.2;
  opacity: 1;
  z-index: 20;
}

/* Slide di atas dan bawah tetap ada tetapi lebih kecil */
:deep(.swiper-slide-prev),
:deep(.swiper-slide-next) {
  scale: 0.8;
  opacity: .7;
}
</style>
