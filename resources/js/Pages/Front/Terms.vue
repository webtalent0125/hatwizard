<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Terms" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

            <div class="mx-auto max-w-7xl px-6 py-16 sm:py-32 text-center">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    Terms of Service
                </div>
            </div>
        </div>
        <div class="bg-white min-h-[20vh]">
        </div>
    </AppLayout>
</template>
