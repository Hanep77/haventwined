<script setup lang="ts">
import Slider from './Slider.vue';
const heroText = "Jadilah <span class='text-yellow-300'>Tenant</span> pada <span class='text-red-400'>Event</span> Pilihanmu dengan <span class='text-green-400'>Mudah</span>, <span class='text-green-400'>Cepat</span>, dan <span class='text-green-400'>Terpercaya.</span>"
</script>

<template>
  <div class="bg-primary pb-8 2xl:pb-8 lg:pb-0">
    <div
      className="min-h-screen 2xl:min-h-auto pt-32 md:pt-20 flex flex-col lg:flex-row gap-5 justify-between items-center max-w-screen-lg mx-auto px-4 xl:px-0">
      <div class="lg:w-2/5 text-center lg:text-start">
        <h1 class="text-3xl lg:text-4xl text-white font-semibold" v-html="heroText"></h1>
        <button class="py-2 px-4 rounded-full bg-white mt-4 cursor-pointer">mulai sekarang</button>
      </div>
      <div class="relative lg:w-3/5">
        <Slider />
      </div>
    </div>
  </div>
</template>
