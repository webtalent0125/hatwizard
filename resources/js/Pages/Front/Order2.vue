<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Order page 1" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img
                :src="asset('assets/img/hero_1.png')"
                alt=""
                class="absolute top-0 left-0"
            />

            <div class="mx-auto w-full px-6 py-16 sm:py-32 text-center">
                <div
                    class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl"
                >
                    artwork
                </div>
                <div class="mx-auto max-w-[938px] w-full mt-8">
                    <div
                        class="grid lg:flex lg:justify-between sm:grid-cols-2 grid-cols-1 gap-4"
                    >
                        <div
                            class="rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold text-primary"
                        >
                            <img
                                :src="asset('assets/img/step/start.png')"
                                class="mr-2"
                                alt="start"
                            />
                            Start
                        </div>
                        <img
                            :src="asset('assets/img/step/dots.png')"
                            class="lg:block hidden object-contain"
                            alt="start"
                        />
                        <div
                            class="rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold"
                        >
                            <img
                                :src="asset('assets/img/step/start.png')"
                                class="mr-2"
                                alt="start"
                            />
                            Select Hats
                        </div>
                        <img
                            :src="asset('assets/img/step/dots.png')"
                            class="lg:block hidden object-contain"
                            alt="start"
                        />
                        <div
                            class="rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold text-primary2"
                        >
                            <img
                                :src="asset('assets/img/step/start.png')"
                                class="mr-2"
                                alt="start"
                            />
                            Artwork
                        </div>
                        <img
                            :src="asset('assets/img/step/dots.png')"
                            class="lg:block hidden object-contain"
                            alt="start"
                        />
                        <div
                            class="rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold"
                        >
                            <img
                                :src="asset('assets/img/step/start.png')"
                                class="mr-2"
                                alt="start"
                            />
                            Start
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div
                class="mx-auto max-w-8xl px-6 py-16 sm:py-24 flex flex-col gap-[30px] w-full"
            >
                <div class="bg-primary bg-opacity-5 rounded p-10">
                    <p class="text-xl text-primary font-bold pb-[30px]">
                        Please Upload Your Artwork
                    </p>

                    <div class="grid grid-cols-1">
                        <div
                            class="rounded border border-dashed border-primary bg-white flex justify-center items-center h-[180px]"
                        >
                            <div>
                                <img
                                    :src="asset('assets/img/order2/upload.png')"
                                    class="h-[60px] w-[60px] mx-auto mb-3"
                                    alt=""
                                />
                                <p>
                                    <span class="text-primary font-bold"
                                        >Choose</span
                                    >
                                    file or drag it here
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="grid lg:grid-cols-12 md:grid-cols-8 sm:grid-cols-6 grid-cols-2 mt-2 gap-2"
                    >
                        <div
                            class="relative bg-white rounded p-2 max-h-[100px] max-w-[100px]"
                        >
                            <img
                                :src="asset('assets/img/order2/upload1.png')"
                                class="mx-auto object-contain w-full h-full"
                                alt=""
                            />
                            <span
                                class="absolute bg-gray-300 rounded-full p-1 top-1 right-1 cursor-pointer h-[20px] w-[20px] text-white flex justify-center items-center text-[12px]"
                                >X</span
                            >
                        </div>
                        <div
                            class="relative bg-white rounded p-2 max-h-[100px] max-w-[100px]"
                        >
                            <img
                                :src="asset('assets/img/order2/upload1.png')"
                                class="mx-auto object-contain w-full h-full"
                                alt=""
                            />
                            <span
                                class="absolute bg-gray-300 rounded-full p-1 top-1 right-1 cursor-pointer h-[20px] w-[20px] text-white flex justify-center items-center text-[12px]"
                                >X</span
                            >
                        </div>
                        <div
                            class="relative bg-white rounded p-2 max-h-[100px] max-w-[100px]"
                        >
                            <img
                                :src="asset('assets/img/order2/upload1.png')"
                                class="mx-auto object-contain w-full h-full"
                                alt=""
                            />
                            <span
                                class="absolute bg-gray-300 rounded-full p-1 top-1 right-1 cursor-pointer h-[20px] w-[20px] text-white flex justify-center items-center text-[12px]"
                                >X</span
                            >
                        </div>
                        <div
                            class="relative bg-white rounded p-2 max-h-[100px] max-w-[100px]"
                        >
                            <img
                                :src="asset('assets/img/order2/upload1.png')"
                                class="mx-auto object-contain w-full h-full"
                                alt=""
                            />
                            <span
                                class="absolute bg-gray-300 rounded-full p-1 top-1 right-1 cursor-pointer h-[20px] w-[20px] text-white flex justify-center items-center text-[12px]"
                                >X</span
                            >
                        </div>
                    </div>

                    <div class="mt-5">
                        <p>
                            Orders are submitted as standard 2D embroidery. 3D
                            Puff embroidery is an extra $5 per hat and is only
                            possible on some designs and is billed separately.
                        </p>
                        <p class="mt-2">
                            Please keep in mind that really small details do not
                            work well for embroidery. Very small text and
                            details will need to be removed from some designs.
                            LESS IS MORE when it comes to embroidery designs.
                        </p>
                    </div>

                    <div class="flex mt-5">
                        <input type="checkbox" class="my-auto mr-2" />
                        <p class="font-bold">
                            I OWN THE RIGHTS TO THE ARTWORK BEING USED OR HAVE
                            PERMISSION FROM THE OWNER TO USE IT
                        </p>
                    </div>
                </div>

                <div class="bg-primary bg-opacity-5 rounded p-10">
                    <p class="text-xl text-primary font-bold pb-[30px]">
                        Artwork Setup
                    </p>
                    <p class="mt-2">
                        Standard Artwork Setup is included for orders of 12 or
                        more hats. For orders less than 12 hats Artwork Setup is
                        a one time charge $50. We keep your artwork on file for
                        all future orders.
                    </p>
                    <p class="mt-2">
                        You will receive a digital stitch preview for feedback
                        and approval before your order goes into production.
                    </p>
                    <p class="mt-2">
                        We test stitch every design to ensure it meets our
                        quality standards before completing your order. Premium
                        Artwork Setup is inculded for free for orders of 36 or
                        more hats.
                    </p>

                    <div
                        class="mt-5 grid lg:grid-cols-2 grid-cols-1 gap-[30px]"
                    >
                        <div
                            class="border border-primary border-solid rounded bg-white p-[30px] relative"
                        >
                            <div class="flex justify-between">
                                <p class="font-bold text-primary">
                                    Standard Setup
                                </p>
                                <p class="font-bold text-primary">$20.00</p>
                            </div>

                            <div class="mt-2">
                                <div class="flex mt-1">
                                    <input
                                        type="image"
                                        :src="
                                            asset('assets/img/order2/check.png')
                                        "
                                        alt=""
                                        class="my-auto mr-3"
                                    />
                                    <p>Digital Stitching Mockup</p>
                                </div>
                                <div class="flex mt-1">
                                    <input
                                        type="image"
                                        :src="
                                            asset('assets/img/order2/check.png')
                                        "
                                        alt=""
                                        class="my-auto mr-3"
                                    />
                                    <p>One Round of Revisions</p>
                                </div>
                                <div class="flex mt-1">
                                    <input
                                        type="image"
                                        :src="
                                            asset('assets/img/order2/check.png')
                                        "
                                        alt=""
                                        class="my-auto mr-3"
                                    />
                                    <p>
                                        Physical test stitch out internally
                                        approved by us
                                    </p>
                                </div>
                            </div>

                            <p class="mt-2 text-sm font-semibold">
                                *FREE if ordering 12 or more hats
                            </p>
                            <input
                                type="image"
                                :src="asset('assets/img/order2/checkBig.png')"
                                alt=""
                                class="absolute h-[36px] w-[36px] bottom-[20px] right-[20px]"
                            />
                        </div>
                        <div
                            class="border border-white border-solid rounded bg-white p-[30px]"
                        >
                            <div class="flex justify-between">
                                <p class="font-bold text-primary">Add-On</p>

                                <div class="mt-2">
                                    <div class="flex mt-1">
                                        <input
                                            type="image"
                                            :src="
                                                asset(
                                                    'assets/img/order2/switch.png'
                                                )
                                            "
                                            alt=""
                                            class="my-auto mr-3"
                                        />
                                        <div class="flex justify-between">
                                            <p>Puff embroidery</p>
                                            <p>$3/hat</p>
                                        </div>
                                    </div>
                                    <div class="flex mt-1">
                                        <input
                                            type="image"
                                            :src="
                                                asset(
                                                    'assets/img/order2/switchnone.png'
                                                )
                                            "
                                            alt=""
                                            class="my-auto mr-3"
                                        />
                                        <div class="flex justify-between">
                                            <p>Back of hat stitching</p>
                                            <p>$2/hat</p>
                                        </div>
                                    </div>
                                    <div class="flex mt-1">
                                        <input
                                            type="image"
                                            :src="
                                                asset(
                                                    'assets/img/order2/switchnone.png'
                                                )
                                            "
                                            alt=""
                                            class="my-auto mr-3"
                                        />
                                        <div class="flex justify-between">
                                            <p>Specialty threads</p>
                                            <p>$2/hat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-primary bg-opacity-5 rounded p-10">
                    <p class="text-xl text-primary font-bold pb-[30px]">
                        Artwork Placement
                    </p>
                </div>

                <div class="bg-primary bg-opacity-5 rounded p-10">
                    <p class="text-xl text-primary font-bold pb-[30px]">
                        Design Details
                    </p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
