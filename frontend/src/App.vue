<script setup lang="ts">
import About, { type WhyChooseUsInterface } from './components/About.vue';
import Hero, { type ImageInterface } from './components/Hero.vue';
import Navbar from './components/Navbar.vue';
import Faq, { type FaqInterface } from './components/Faq.vue';
import Footer, { type ContactInterface } from './components/Footer.vue';
import { onMounted, ref } from 'vue';

type ContentType = {
  id: number,
  text_banner: string,
  hero_images: ImageInterface[],
  about: string,
  why_choose_us: WhyChooseUsInterface[],
  faqs: FaqInterface[],
  contacts: ContactInterface[],
}

const content = ref<ContentType | null>(null)

onMounted(async () => {
  const apiUrl = import.meta.env.VITE_API_URL;
  await fetch(apiUrl + "/api/content")
    .then(response => response.json())
    .then(data => content.value = data.data);
})
</script>

<template>
  <Navbar />
  <Hero :text_banner="content?.text_banner" :hero_images="content?.hero_images" />
  <About :about="content?.about" :why_choose_us="content?.why_choose_us" />
  <Faq :faqs="content?.faqs" />
  <Footer :contacts="content?.contacts" />
</template>
