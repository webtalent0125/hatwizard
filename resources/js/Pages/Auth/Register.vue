<script setup>
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthLayout from "@/Layouts/AuthLayout.vue";
import Checkbox from "@/Components/Checkbox.vue";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    accept: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Register" />

        <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl mb-8">
            Signup
        </div>

        <form @submit.prevent="submit" class="max-w-[430px]">
            <div>
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autocomplete="name"
                    placeholder="Username"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-6">
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="email"
                    placeholder="Email address"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-6">

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                    placeholder="Password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-6">

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm Password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex w-full justify-between mt-6">
                <label class="flex items-center">
                    <Checkbox name="accept" v-model:checked="form.accept" />
                    <span class="ml-2 text-sm text-gray-600">I accept the <Link :href="route('terms')" class="text-sm text-primary hover:text-primary2 ml-0">Terms and Conditions</Link></span>
                </label>
            </div>

            <div class="w-full mt-6">
                <button class="rounded-full w-full bg-white py-2 font-erica-one text-2xl uppercase text-primary shadow-xl" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Sign Up
                </button>
            </div>

            <div class="flex mt-6 justify-center items-center">
                Already have an account?
                <Link
                    :href="route('login')"
                    class="text-sm text-primary hover:text-primary2 ml-2"
                >
                    Login
                </Link>
            </div>
        </form>
    </AuthLayout>
</template>
