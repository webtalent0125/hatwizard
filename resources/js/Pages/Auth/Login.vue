<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthLayout from "@/Layouts/AuthLayout.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Log in" />

        <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl mb-8">
            Login
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="max-w-md">
            <div>
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Username or email address"
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
                    autocomplete="current-password"
                    placeholder="Password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex w-full justify-between mt-6">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Keep signed in</span>
                </label>
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-sm text-primary hover:text-primary2"
                >
                    Forgot password?
                </Link>
            </div>

            <div class="w-full mt-6">
                <button class="rounded-full w-full bg-white py-2 font-erica-one text-2xl uppercase text-primary shadow-xl" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </button>
            </div>
            <div class="flex mt-6 justify-center items-center">
                Don't have an account?
                <Link
                    :href="route('register')"
                    class="text-sm text-primary hover:text-primary2 ml-2"
                >
                    Sign Up
                </Link>
            </div>
        </form>
    </AuthLayout>
</template>
