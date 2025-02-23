<script setup lang="ts">
import illustration from "@/assets/img/icon-1.svg"
import illustration2 from "@/assets/img/undraw_bookmarks.svg"

export interface WhyChooseUsInterface {
  title: string,
  description: string,
}

defineProps<{
  about?: string,
  why_choose_us?: WhyChooseUsInterface[],
}>();
</script>

<template>
  <section class="text-zinc-900">
    <div className="py-8 max-w-screen-lg min-h-screen 2xl:min-h-auto mx-auto px-4 xl:px-0">
      <div class="mt-5 flex flex-col md:flex-row items-center gap-5 bg-primary p-8 rounded text-white">
        <div class="md:w-1/2 flex flex-col gap-2 md:text-lg">
          <h2 class="text-2xl font-bold">Tentang Kami</h2>
          <div class="text-indigo-100 flex flex-col gap-2" v-html="about"></div>
        </div>
        <div class="md:w-1/2">
          <img :src="illustration" alt="illustration">
        </div>
      </div>
      <div class="flex flex-col md:flex-row gap-12 md:gap-8 mt-20">
        <div class="md:order-2">
          <h2 class="text-2xl md:text-3xl font-bold md:order-2">Kenapa Memilih Haventwined?</h2>
          <ul class="text-zinc-500 text-lg mt-3 list-disc ps-5">
            <li v-for="data in why_choose_us" :key="data.title">
              <h5 class="text-primary font-semibold">{{ data.title }}</h5>
              <p>{{ data.description }}</p>
            </li>
          </ul>
        </div>
        <div class="md:w-1/2">
          <img :src="illustration2" alt="illustration2">
        </div>

      </div>
    </div>
  </section>
</template>
