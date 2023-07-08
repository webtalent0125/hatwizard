<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">
            <img :src="asset('assets/img/hero_2.png')" alt="" class="absolute bottom-0 right-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40 z-10 relative">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <slot />
                </div>
                <div class="relative mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0">
                    <div class="bg-white rounded-full inset-0 absolute z-10 m-[5px]"></div>
                    <img :src="asset('assets/img/head.png')" alt="" class="w-full relative z-20 -translate-x-[20px] -translate-y-[10px] md:-translate-x-[50px] md:-translate-y-[20px]" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
