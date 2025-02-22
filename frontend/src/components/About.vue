<script setup lang="ts">
import illustration from "@/assets/img/icon-1.svg"
import illustration2 from "@/assets/img/undraw_bookmarks.svg"

const aboutUs = [
  "Haventwined adalah platform pemesanan tenant inovatif yang dirancang untuk menyederhanakan manajemen acara bagi penyelenggara dan penyewa.",
  "Didirikan pada tahun 2024, kami memiliki misi untuk mengubah cara pemesanan penyewa acara dikelola secara digital, dan kami ingin Anda menjadi bagian dari perjalanan kami!"
];

const whyChooseUs = [
  {
    title: "Mudah & Cepat",
    description: "Proses pemesanan tenant dalam hitungan menit."
  },
  {
    title: "Transparan",
    description: "Harga dan detail tenant terlihat jelas."
  },
  {
    title: "Dikelola Secara Digital",
    description: "Kurangi proses manual yang rumit."
  },
  {
    title: "Fleksibel",
    description: "Cocok untuk event besar maupun kecil."
  },
]
</script>

<template>
  <section class="text-zinc-900">
    <div className="py-8 max-w-screen-lg min-h-screen 2xl:min-h-auto mx-auto px-4 xl:px-0">
      <div class="mt-5 flex flex-col md:flex-row items-center gap-5 bg-primary p-8 rounded text-white">
        <div class="md:w-1/2 flex flex-col gap-2 md:text-lg">
          <h2 class="text-2xl font-bold">Tentang Kami</h2>
          <p class="text-indigo-100" v-for="(text, index) in aboutUs" :key="index">{{ text }}</p>
        </div>
        <div class="md:w-1/2">
          <img :src="illustration" alt="illustration">
        </div>
      </div>
      <div class="flex flex-col md:flex-row gap-12 md:gap-8 mt-20">
        <div class="md:w-1/2 order-2">
          <img :src="illustration2" alt="illustration2">
        </div>
        <div>
          <h2 class="text-3xl font-bold">Kenapa Memilih Haventwined?</h2>
          <ul class="text-zinc-500 text-lg mt-3 list-disc ps-5">
            <li v-for="data in whyChooseUs" :key="data.title">
              <h5 class="text-primary font-semibold">{{ data.title }}</h5>
              <p>{{ data.description }}</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>
