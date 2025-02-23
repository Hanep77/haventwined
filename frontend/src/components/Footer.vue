<script setup lang="ts">
import logo from "@/assets/img/logo-haventwined.png"

export interface ContactInterface {
  platform: string,
  text: string,
  link: string,
}

defineProps<{
  contacts?: ContactInterface[]
}>();
</script>

<template>
  <footer class="bg-primary text-white">
    <div class="mx-auto w-full max-w-screen-lg px-4 md:px-0 py-6 lg:py-8">
      <div class="mb-5">
        <img :src="logo" alt="logo" class="h-12">
      </div>
      <div class="flex flex-col md:flex-row justify-between">
        <div class="mb-6 flex flex-col justify-between md:mb-0">

          <div>
            <h2 class="text-xl font-bold text-white mb-2">Hubungi Kami</h2>
            <div class="text-lg flex flex-col gap-2">
              <div v-for="contact in contacts">
                <p class="font-semibold text-xl">{{ contact.platform }}</p>
                <a :href="contact.link" class="hover:underline">{{ contact.text }}</a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h2 class="text-xl font-bold text-white mb-2">Dukungan</h2>
          <div class="text-lg flex flex-col gap-2">
            <a href="#faq">Faq</a>
            <p>Kebijakan Privasi</p>
            <p>Syarat dan ketentuan</p>
          </div>
        </div>
      </div>
      <div>
        <hr class="my-6 border-zinc-300" />
        <p class="text-center">©2025 sekosan.id</p>
      </div>
    </div>
  </footer>
</template>
