<script setup lang="ts">
import logo from "@/assets/img/logo-haventwined.png"
</script>

<template>
  <nav class="z-50 fixed w-full bg-primary">
    <div className="py-4 flex justify-between items-center max-w-screen-lg mx-auto px-4 xl:px-0">
      <div>
        <img :src="logo" alt="logo" class="h-12">
      </div>
    </div>
  </nav>
</template>
