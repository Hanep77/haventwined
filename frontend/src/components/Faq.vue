<script setup lang="ts">
import { ref } from "vue";

export interface FaqInterface {
  content_id: number,
  question: string,
  answer: string,
}

defineProps<{
  faqs?: FaqInterface[]
}>();

const openIndex = ref<number | null>(null);

const toggleFAQ = (index: number) => {
  openIndex.value = openIndex.value === index ? null : index;
};
</script>

<template>
  <section id="faq" class="max-w-screen-md mx-auto pb-8 md:py-20 px-4 md:px-0">
    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">
      FAQ
    </h2>
    <div class="space-y-4">
      <div v-for="(faq, index) in faqs" :key="index"
        class="border border-gray-300 rounded-lg shadow-lg overflow-hidden">
        <button
          class="w-full flex justify-between items-center p-5 bg-white text-primary text-left font-semibold text-lg hover:bg-gray-50 transition-colors duration-300"
          @click="toggleFAQ(index)">
          <span>{{ faq.question }}</span>
          <div class="transition-transform duration-300"
            :class="{ '-rotate-90': openIndex === index, 'rotate-90': openIndex !== index }">></div>
        </button>
        <div v-if="openIndex === index" :initial="{ opacity: 0, height: 0 }" :animate="{ opacity: 1, height: 'auto' }"
          :exit="{ opacity: 0, height: 0 }" transition="{ duration: 0.2, ease: 'easeInOut' }" class="overflow-hidden">
          <div class="p-5 bg-gray-50 text-gray-800 border-t border-gray-200">
            {{ faq.answer }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
