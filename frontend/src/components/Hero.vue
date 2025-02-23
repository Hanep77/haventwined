<script setup lang="ts">
import Slider from './Slider.vue';

export interface ImageInterface {
  content_id: number
  image: string
}

defineProps<{
  text_banner?: string,
  hero_images?: ImageInterface[],
}>();
</script>

<template>
  <div class="bg-primary pb-8 2xl:pb-8 lg:pb-0">
    <div
      className="min-h-screen 2xl:min-h-auto pt-32 md:pt-20 flex flex-col lg:flex-row gap-5 justify-between items-center max-w-screen-lg mx-auto px-4 xl:px-0">
      <div class="lg:w-2/5 text-center lg:text-start">
        <h1 class="text-3xl lg:text-4xl text-white font-semibold" v-html="text_banner"></h1>
        <button class="py-2 px-4 rounded-full bg-white mt-4 cursor-pointer">mulai sekarang</button>
      </div>
      <div class="relative lg:w-3/5">
        <Slider :hero_images="hero_images" />
      </div>
    </div>
  </div>
</template>
