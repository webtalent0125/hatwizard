<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import Partners from "@/Components/Partners.vue";
import HatsRow from "@/Components/HatsRow.vue";
import Reviews from "@/Components/Reviews.vue";
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Order" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-24 text-center relative">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    Start
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-24 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-2xl bg-primary2 px-8 py-10">
                    <div class="uppercase py-1 leading-6 text-white font-erica-one text-3xl">
                        Embroidery
                    </div>
                    <ul role="list" class="mt-6 text-white pl-2 space-y-4">
                        <li>
                            No Minimum Order
                        </li>
                        <li>
                            Lowest Price Option
                        </li>
                        <li>
                            Most Popular
                        </li>
                    </ul>

                    <Link :href="route('order.start')" class="flex w-64 justify-center rounded-full mt-6 bg-white py-2 font-erica-one text-2xl uppercase text-primary shadow-xl">
                        Get Started
                    </Link>
                </div>
                <div class="rounded-2xl bg-primary2 px-8 py-10">
                    <div class="uppercase py-1 leading-6 text-white font-erica-one text-3xl">
                        leather patches
                    </div>
                    <ul role="list" class="mt-6 text-white pl-2 space-y-4">
                        <li>
                            No Minimum Order
                        </li>
                        <li>
                            Synthetic Water Resistant Leather
                        </li>
                        <li>
                            Great For Small Details
                        </li>
                    </ul>

                    <Link :href="route('order.start')" class="flex w-64 justify-center  rounded-full mt-6 bg-white py-2 font-erica-one text-2xl uppercase text-primary shadow-xl">
                        Get Started
                    </Link>
                </div>
            </div>
        </div>

        <Reviews />

        <Partners />

        <HatsRow />

    </AppLayout>
</template>
