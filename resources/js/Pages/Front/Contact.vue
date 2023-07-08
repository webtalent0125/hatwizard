<script setup>
import {Head, useForm} from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextDiv from "@/Components/TextDiv.vue";

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: '',
    files: '',
});

const submit = () => {
};

</script>

<template>
    <Head title="Contact Us" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-24 text-center relative">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    Contact Us
                </div>
                <p class="text-primary mt-6">If you have a question fill the form below <br>
                    or send us an email to <a href="mailto:support@hatwizard.com" class="font-bold">support@hatwizard.com</a></p>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-8xl py-16 lg:flex lg:items-center lg:gap-x-10 lg:px-8">
                <form @submit.prevent="submit" class="md:w-[890px] max-w-full mx-auto space-y-6 pt-6 pb-24">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <InputLabel for="name" value="Name"/>
                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full !border-primary10 !shadow-none"
                                v-model="form.name"
                                required
                                placeholder="Name"
                            />

                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>

                        <div>
                            <InputLabel for="email" value="Email address"/>
                            <TextInput
                                id="email"
                                type="text"
                                class="mt-1 block w-full !border-primary10 !shadow-none"
                                v-model="form.email"
                                required
                                placeholder="Email address"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                    </div>

                    <div>
                        <InputLabel for="subject" value="Subject"/>
                        <TextInput
                            id="subject"
                            type="text"
                            class="mt-1 block w-full !border-primary10 !shadow-none"
                            v-model="form.subject"
                            required
                            placeholder="Subject"
                        />

                        <InputError class="mt-2" :message="form.errors.subject" />
                    </div>

                    <div>
                        <InputLabel for="message" value="Message"/>
                        <TextDiv
                            id="message"
                            type="text"
                            class="mt-1 block w-full !border-primary10 !shadow-none"
                            v-model="form.message"
                            required
                            placeholder="Message"
                            rows="5"
                        />

                        <InputError class="mt-2" :message="form.errors.message" />
                    </div>


                    <div>
                        <InputLabel for="files" value="Add Files"/>

                        <div class="w-full min-h-[100px] rounded-xl border border-dashed border-primary py-8 flex flex-col items-center justify-center text-primary cursor-pointer">
                            <img :src="asset('assets/img/choose.png')" alt="">
                            <div class="mt-4"><b>Choose file</b>  <span class="ml-1">or drag it here</span></div>
                        </div>
                        <InputError class="mt-2" :message="form.errors.files" />
                    </div>

                    <div class="w-full pt-4 text-center">
                        <button class="rounded-full bg-primary py-3 px-16 font-erica-one text-2xl uppercase text-white shadow-xl" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Send Message
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </AppLayout>
</template>
