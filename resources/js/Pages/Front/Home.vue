<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Home" />

    <AppLayout>
        <div class="bg-primary0">
            <div class="mx-auto max-w-7xl px-6 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <div class="flex">
                        <div class="relative flex items-center gap-x-4 rounded-full px-4 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Custom Hats
                        </div>
                    </div>
                    <h1 class="mt-10 max-w-lg text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl font-erica-one">Design
                        your own
                        HAT online!
                    </h1>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Order Now</a>
                    </div>
                </div>
                <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
                    <img :src="asset('assets/img/head.png')" alt="" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
