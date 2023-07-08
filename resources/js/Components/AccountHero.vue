<template>
    <div class="bg-primary0 relative">
        <img :src="asset('assets/img/hero_1.png')" alt="" class="absolute top-0 left-0">

        <div class="mx-auto max-w-8xl px-6 py-16 sm:py-16 flex items-center justify-between relative">
            <div class="">
                <div class="uppercase py-1 leading-6 text-primary font-erica-one text-3xl mb-6">
                    My Account
                </div>

                <p class="text-md font-bold text-primary font-bold whitespace-nowrap">Hello {{ $page.props.auth.user.name }}!</p>
                <p class="text-sm text-primary">You can manage your orders and profile from here.</p>
            </div>
            <div class="">
                <div class="w-36">
                    <img class="inline-block w-full rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
            </div>
        </div>
    </div>
</template>
