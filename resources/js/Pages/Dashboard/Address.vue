<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import AccountNav from "@/Components/AccountNav.vue";
</script>

<template>
    <Head title="Addresses" />

    <AppLayout>
        <div class="py-12 bg-white">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <AccountNav />
                    <div class="w-full px-4 min-h-[35vh]">
                        <h2 class="font-bold text-primary">Addresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
