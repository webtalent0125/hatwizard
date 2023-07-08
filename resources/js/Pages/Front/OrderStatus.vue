<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";


const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    zipcode: '',
});

const submit = () => {
};

</script>

<template>
    <Head title="Order Status" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">
            <img :src="asset('assets/img/hero_2.png')" alt="" class="absolute bottom-0 right-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-32 text-center min-h-[80vh] flex flex-col justify-center relative">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    Look Up Your Orders
                </div>

                <form @submit.prevent="submit" class="w-[430px] max-w-full mx-auto space-y-4 pt-6">
                    <div>
                        <TextInput
                            id="email"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            placeholder="Email address"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div>
                        <TextInput
                            id="first_name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.first_name"
                            required
                            placeholder="First Name"
                        />

                        <InputError class="mt-2" :message="form.errors.first_name" />
                    </div>

                    <div>
                        <TextInput
                            id="last_name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.last_name"
                            required
                            placeholder="Last Name"
                        />

                        <InputError class="mt-2" :message="form.errors.last_name" />
                    </div>

                    <div>
                        <TextInput
                            id="zipcode"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.zipcode"
                            required
                            placeholder="Zip Code"
                        />

                        <InputError class="mt-2" :message="form.errors.zipcode" />
                    </div>

                    <div class="w-full pt-4">
                        <button class="rounded-full w-full bg-white py-2 font-erica-one text-2xl uppercase text-primary shadow-xl" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Lookup Order
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </AppLayout>
</template>
