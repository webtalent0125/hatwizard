<script setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon, ChevronUpIcon } from '@heroicons/vue/24/outline'

const faqs = [
    {
        question: "What is your contact info?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Turn around time?",
        answer:
            "<p>Please note that the estimated production time for your order is approximately 14-21 business days (Monday through Friday) from the date of order placement. Once your order has completed production, it will be shipped using reliable services like UPS or USPS. Shipping typically takes a few business days for your package to reach your doorstep. </p><p class='mt-4'> We would like to emphasize that the mentioned turnaround times are estimates. While we strive to complete and ship most orders within the original estimated shipping window provided, unforeseen issues may arise during production. These issues could include difficulties in stitching the logo, human errors during production, or delays in obtaining necessary blanks due to back-orders. </p><p class='mt-4'> Rest assured that our embroidery machines are in operation around the clock, and we make every effort to expedite the completion and delivery of your order. We understand the importance of a timely delivery and are committed to ensuring your satisfaction. </p><p class='mt-4'> We appreciate your patience and understanding as we work diligently to fulfill your order promptly. If you have any concerns or questions about your order's progress, please don't hesitate to reach out to our dedicated team.</p>",
    },
    {
        question: "Minimum order quantity?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "See it before ordering?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Order hats that aren’t listed?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "How do I reorder?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
    {
        question: "Where are your hats made?",
        answer:
            "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
    },
]
</script>

<template>
    <Head title="FAQ" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

            <div class="mx-auto max-w-8xl px-6 py-16 sm:py-24 text-center relative">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl">
                    Frequently Asked Questions
                </div>
                <p class="text-primary mt-6">If you have a question fill the form below <br>
                    or send us an email to <a href="mailto:support@hatwizard.com" class="font-bold">support@hatwizard.com</a></p>
            </div>
        </div>
        <div class="bg-white">
            <div class="mx-auto max-w-8xl py-16 lg:flex lg:items-center lg:gap-x-10 lg:px-8">
                <dl class="space-y-4 w-full">
                    <Disclosure as="div" v-for="faq in faqs" :key="faq.question" class="py-2 px-8 border rounded-3xl" v-slot="{ open }">
                        <dt>
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-900">
                                <span class="text-base text-primary font-bold leading-7">{{ faq.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <ChevronDownIcon v-if="!open" class="h-5 w-5 text-primary font-bold" aria-hidden="true" />
                                  <ChevronUpIcon v-else class="h-5 w-5 text-primary font-bold" aria-hidden="true" />
                                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <div class="text-sm leading-6 text-gray-600 font-medium" v-html="faq.answer"></div>
                        </DisclosurePanel>
                    </Disclosure>
                </dl>
            </div>
        </div>
    </AppLayout>
</template>
