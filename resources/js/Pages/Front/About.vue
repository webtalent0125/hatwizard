<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="About Us" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 text-center">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    About hat wizard
                </div>
                <p class="text-primary mt-6">Small business based in Georgia, USA that specializes in hat embroidery</p>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
                <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
                    <img :src="asset('assets/img/about.png')" alt="" />
                </div>
                <div class="py-2 mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <div class="mt-0 text-sm">
                        <p class="mb-6">
                            Welcome to Hat Wizard, your premier destination for top-quality hat embroidery in Georgia, USA. We take pride in offering a wide range of beautifully crafted embroidered hats that add a touch of style and personality to any outfit.
                        </p>
                        <p class="mb-6">
                            We understand the importance of self-expression and individuality. That's why we have dedicated ourselves to creating unique and custom hat designs that reflect your personal taste and preferences. Whether you're looking for a custom logo, a personalized message, or a distinctive pattern, our skilled team of embroidery experts can bring your vision to life.
                        </p>
                        <p class="mb-6">
                            With years of experience in the industry, we have perfected the art of hat embroidery. Our attention to detail and commitment to using only the finest materials ensure that each hat we produce is of the highest quality. We work closely with our clients to understand their needs and provide exceptional customer service throughout the entire process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
