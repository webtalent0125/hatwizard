<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Partners from "@/Components/Partners.vue";
import HatsRow from "@/Components/HatsRow.vue";
import Reviews from "@/Components/Reviews.vue";

</script>

<template>
    <Head title="Home" />

    <AppLayout>
        <div class="bg-primary0 relative">
                <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">
                <img :src="asset('assets/img/hero_2.png')" alt="" class="absolute bottom-0 right-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40 z-10 relative">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <div class="uppercase py-1 leading-6 text-primary2 font-erica-one text-3xl">
                        Custom Hats
                    </div>
                    <div class="mt-4">
                        <img :src="asset('assets/img/design-text-img.png')" alt="">
                    </div>
                    <div class="mt-10 flex items-center gap-x-6">
                        <Link :href="route('order')" class="rounded-full bg-white px-16 py-4 font-erica-one text-2xl uppercase text-primary shadow-xl">Order Now</Link>
                    </div>
                </div>
                <div class="relative mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0">
                    <div class="bg-white rounded-full inset-0 absolute z-10 m-[5px]"></div>
                    <img :src="asset('assets/img/head.png')" alt="" class="w-full relative z-20 -translate-x-[20px] -translate-y-[10px] md:-translate-x-[50px] md:-translate-y-[20px]" />
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 lg:flex lg:items-center lg:gap-x-10 lg:px-8 lg:py-40">
                <div class="mt-16 sm:mt-24 lg:mt-0 lg:flex-shrink-0 lg:flex-grow">
                    <img :src="asset('assets/img/hero_3.png')" alt="" />
                </div>
                <div class="py-8 mx-auto max-w-2xl lg:mx-0 lg:flex-auto">
                    <div class="uppercase py-1 leading-6 text-primary2 font-erica-one text-3xl">
                        About Hat Wizard
                    </div>
                    <div class="mt-6 text-sm">
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
                    <div class="mt-10 flex items-center gap-x-6">
                        <Link :href="route('about')">
                            <PrimaryButton class="font-bold px-8 uppercase">Read More About Us</PrimaryButton>
                        </Link>
                    </div>
                </div>
            </div>
        </div>

        <Reviews />

        <Partners />

        <HatsRow />

    </AppLayout>
</template>
