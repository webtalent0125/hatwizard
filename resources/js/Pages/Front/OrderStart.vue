<script setup>
import { Head } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from "vue";
import { Collapse } from "vue-collapsed";

const isExpanded = ref(false);
const isExpandedFlexit = ref(false);
const isExpandedYoopong = ref(false);
const isExpandedMade = ref(false);
</script>

<template>
    <Head title="Order page 1" />

    <AppLayout>
        <div class="bg-primary0 relative">
            <img
                :src="asset('assets/img/hero_1.png')"
                alt=""
                class="absolute top-0 left-0 z-0"
            />

            <div class="mx-auto w-full px-6 py-16 sm:py-32 text-center relative z-10">
                <div
                    class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl"
                >
                    select hats
                </div>
                <div class="mx-auto max-w-[938px] w-full mt-8">
                    <div
                        class="grid lg:flex lg:justify-between sm:grid-cols-2 grid-cols-1 gap-4"
                    >
                        <div
                            class="hover:bg-gray-100 cursor-pointer transition ease ease-in rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold text-primary"
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
                            class="hover:bg-gray-100 cursor-pointer transition ease ease-in rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold text-primary2"
                        >
                            <img
                                :src="asset('assets/img/step/Selectedcap.png')"
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
                            class="hover:bg-gray-100 cursor-pointer transition ease ease-in rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold"
                        >
                            <img
                                :src="asset('assets/img/step/vector1.png')"
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
                            class="hover:bg-gray-100 cursor-pointer transition ease ease-in rounded-full bg-white py-[10px] px-[30px] h-[50px] lg:w-[200px] w-full flex items-center font-semibold"
                        >
                            <img
                                :src="
                                    asset('assets/img/step/shopping-card.png')
                                "
                                class="mr-2"
                                alt="start"
                            />
                            Checkout
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div
                class="mx-auto max-w-8xl px-6 py-16 sm:py-24 flex flex-col gap-[70px] w-full"
            >
                <div class="flex flex-col gap-[30px] w-full">
                    <div
                        class="w-full p-2 bg-gradient-to-l from-[#a690be] from-10% to-[#6d3fa133] px-[30px] py-[25px] flex justify-between rounded relative"
                    >
                        <img
                            :src="asset('assets/img/order1/logo1.png')"
                            class="object-contain h-[50px]"
                            alt=""
                        />
                        <img
                            :src="asset('assets/img/order1/r1121.png')"
                            class="absolute right-[30px] bottom-[-10px]"
                            alt=""
                        />
                    </div>

                    <div
                        class="w-full flex justify-between cursor-pointer"
                        @click="isExpanded = !isExpanded"
                    >
                        <div class="flex">
                            <img
                                :src="asset('assets/img/order1/image2.png')"
                                class="h-[100px]"
                                alt=""
                            />
                            <div class="my-auto">
                                <p class="text-primary font-bold">
                                    112 Trucker Snapback
                                </p>
                                <span
                                    >The Ultimate Blend of Style and
                                    Comfort</span
                                >
                            </div>
                        </div>
                        <button class="cursor-pointer my-auto">
                            <img
                                :src="asset('assets/img/order1/arrowUp.png')"
                                :class="
                                    'transition ease ease-out my-auto ' +
                                    (!isExpanded && ' rotate-180')
                                "
                                alt=""
                            />
                        </button>
                    </div>

                    <Collapse :when="isExpanded" class="v-collapse">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <p
                                    class="font-semibold text-center p-[10px] text-primary"
                                >
                                    One Size
                                </p>
                                <div
                                    class="bg-white rounded text-center p-[10px]"
                                >
                                    7” - 7 3/4”
                                </div>
                            </div>
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <div class="grid grid-cols-7 gap-2">
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            1-6
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $22
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            7-23
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $20
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            24
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $19
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            48
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $18
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            96
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $17
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            144
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $16
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            288+
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $15
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <p class="text-gray-400 text-right text-sm">
                                Price includes decoration
                            </p>
                        </div>

                        <div
                            class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] border-b border-gray-300 pb-10"
                        >
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Collapse>
                </div>

                <div class="flex flex-col gap-[30px] w-full">
                    <div
                        class="w-full p-2 bg-gradient-to-l from-[#d6a0c7] from-10% to-[#f0e0ec] px-[30px] py-[25px] flex justify-between rounded relative"
                    >
                        <img
                            :src="asset('assets/img/order1/flex-logo1.png')"
                            class="object-contain h-[45px]"
                            alt=""
                        />
                        <img
                            :src="asset('assets/img/order1/flex1.png')"
                            class="absolute right-[30px] bottom-[-10px]"
                            alt=""
                        />
                    </div>

                    <div
                        class="w-full flex justify-between cursor-pointer"
                        @click="isExpandedFlexit = !isExpandedFlexit"
                    >
                        <div class="flex">
                            <img
                                :src="asset('assets/img/order1/image2.png')"
                                class="h-[100px]"
                                alt=""
                            />
                            <div class="my-auto">
                                <p class="text-primary font-bold">
                                    112 Trucker Snapback
                                </p>
                                <span
                                    >The Ultimate Blend of Style and
                                    Comfort</span
                                >
                            </div>
                        </div>
                        <button class="cursor-pointer my-auto">
                            <img
                                :src="asset('assets/img/order1/arrowUp.png')"
                                :class="
                                    'transition ease ease-out my-auto ' +
                                    (!isExpandedFlexit && ' rotate-180')
                                "
                                alt=""
                            />
                        </button>
                    </div>

                    <Collapse :when="isExpandedFlexit" class="v-collapse">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <p
                                    class="font-semibold text-center p-[10px] text-primary"
                                >
                                    One Size
                                </p>
                                <div
                                    class="bg-white rounded text-center p-[10px]"
                                >
                                    7” - 7 3/4”
                                </div>
                            </div>
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <div class="grid grid-cols-7 gap-2">
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            1-6
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $22
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            7-23
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $20
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            24
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $19
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            48
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $18
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            96
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $17
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            144
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $16
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            288+
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $15
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <p class="text-gray-400 text-right text-sm">
                                Price includes decoration
                            </p>
                        </div>

                        <div
                            class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] border-b border-gray-300 pb-10"
                        >
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Collapse>
                </div>

                <div class="flex flex-col gap-[30px] w-full">
                    <div
                        class="w-full p-2 bg-gradient-to-l from-[#e27f91] from-10% to-[#ebcbd0] px-[30px] py-[25px] flex justify-between rounded relative"
                    >
                        <img
                            :src="asset('assets/img/order1/yupoong1.png')"
                            class="object-contain h-[40px]"
                            alt=""
                        />
                        <img
                            :src="asset('assets/img/order1/yupoonghat.png')"
                            class="absolute right-[30px] bottom-[-10px]"
                            alt=""
                        />
                    </div>

                    <div
                        class="w-full flex justify-between cursor-pointer"
                        @click="isExpandedYoopong = !isExpandedYoopong"
                    >
                        <div class="flex">
                            <img
                                :src="asset('assets/img/order1/image2.png')"
                                class="h-[100px]"
                                alt=""
                            />
                            <div class="my-auto">
                                <p class="text-primary font-bold">
                                    112 Trucker Snapback
                                </p>
                                <span
                                    >The Ultimate Blend of Style and
                                    Comfort</span
                                >
                            </div>
                        </div>
                        <button class="cursor-pointer my-auto">
                            <img
                                :src="asset('assets/img/order1/arrowUp.png')"
                                :class="
                                    'transition ease ease-out my-auto ' +
                                    (!isExpandedYoopong && ' rotate-180')
                                "
                                alt=""
                            />
                        </button>
                    </div>

                    <Collapse :when="isExpandedYoopong" class="v-collapse">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <p
                                    class="font-semibold text-center p-[10px] text-primary"
                                >
                                    One Size
                                </p>
                                <div
                                    class="bg-white rounded text-center p-[10px]"
                                >
                                    7” - 7 3/4”
                                </div>
                            </div>
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <div class="grid grid-cols-7 gap-2">
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            1-6
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $22
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            7-23
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $20
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            24
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $19
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            48
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $18
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            96
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $17
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            144
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $16
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            288+
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $15
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <p class="text-gray-400 text-right text-sm">
                                Price includes decoration
                            </p>
                        </div>

                        <div
                            class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] border-b border-gray-300 pb-10"
                        >
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Collapse>
                </div>

                <div class="flex flex-col gap-[30px] w-full">
                    <div
                        class="w-full p-2 bg-gradient-to-l from-[#80a1d3] from-10% to-[#c7d3e6] px-[30px] py-[25px] flex justify-between rounded relative"
                    >
                        <img
                            :src="asset('assets/img/order1/Made.png')"
                            class="object-contain h-[30px]"
                            alt=""
                        />
                        <img
                            :src="asset('assets/img/order1/madeHat.png')"
                            class="absolute right-[30px] bottom-[-10px]"
                            alt=""
                        />
                    </div>

                    <div
                        class="w-full flex justify-between cursor-pointer"
                        @click="isExpandedMade = !isExpandedMade"
                    >
                        <div class="flex">
                            <img
                                :src="asset('assets/img/order1/image2.png')"
                                class="h-[100px]"
                                alt=""
                            />
                            <div class="my-auto">
                                <p class="text-primary font-bold">
                                    112 Trucker Snapback
                                </p>
                                <span
                                    >The Ultimate Blend of Style and
                                    Comfort</span
                                >
                            </div>
                        </div>
                        <button class="cursor-pointer my-auto">
                            <img
                                :src="asset('assets/img/order1/arrowUp.png')"
                                :class="
                                    'transition ease ease-out my-auto ' +
                                    (!isExpandedMade && ' rotate-180')
                                "
                                alt=""
                            />
                        </button>
                    </div>

                    <Collapse :when="isExpandedMade" class="v-collapse">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <p
                                    class="font-semibold text-center p-[10px] text-primary"
                                >
                                    One Size
                                </p>
                                <div
                                    class="bg-white rounded text-center p-[10px]"
                                >
                                    7” - 7 3/4”
                                </div>
                            </div>
                            <div
                                class="rounded p-[10px] bg-primary bg-opacity-5"
                            >
                                <div class="grid grid-cols-7 gap-2">
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            1-6
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $22
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            7-23
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $20
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            24
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $19
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            48
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $18
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            96
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $17
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            144
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $16
                                        </div>
                                    </div>
                                    <div>
                                        <p
                                            class="font-semibold text-center p-[10px] text-primary"
                                        >
                                            288+
                                        </p>
                                        <div
                                            class="bg-white rounded text-center p-[10px]"
                                        >
                                            $15
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                            <p class="text-gray-400 text-right text-sm">
                                Price includes decoration
                            </p>
                        </div>

                        <div
                            class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] border-b border-gray-300 pb-10"
                        >
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                            <div class="p-[10px]">
                                <p class="text-right">OSFA</p>
                                <div class="flex flex-col gap-[30px]">
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex">
                                            <img
                                                :src="
                                                    asset(
                                                        'assets/img/order1/hat_62.png'
                                                    )
                                                "
                                                class="h-[70px] mr-[30px]"
                                                alt=""
                                            />
                                            <span class="my-auto">Black</span>
                                        </div>
                                        <vue-number-input
                                            class="border border-gray-300 rounded-full w-[100px] h-8 my-auto"
                                            placeholder="0"
                                            :min="0"
                                            controls
                                        ></vue-number-input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Collapse>
                </div>

                <div class="flex justify-between">
                    <button
                        class="text-center h-[60px] w-[240px] rounded-full px-[30x] font-bold bg-primary bg-opacity-5 text-primary hover:bg-opacity-20 transition ease ease-out"
                    >
                        BACK
                    </button>
                    <a
                        href="/order/upload"
                        class="text-center h-[60px] w-[240px] rounded-full px-[30x] font-bold bg-primary text-white flex justify-center items-center hover:bg-opacity-80 transition ease ease-out"
                    >
                        <span class="py-auto">NEXT</span>
                    </a>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style>
.v-collapse {
    transition: height 300ms cubic-bezier(0.33, 1, 0.68, 1);
}
.vue-number-input__input {
    margin-top: 3px;
    padding: 0px !important;
    text-align: center;
    border: none !important;
    outline: none !important;
}
.vue-number-input__button {
    border: none !important;
}
.vue-number-input__button--plus {
    width: 15px !important;
    margin-right: 7px !important;
    height: 16px !important;
    margin-top: 5px !important;
}
.vue-number-input__button--minus {
    width: 10px !important;
    margin-left: 7px !important;
}
</style>
