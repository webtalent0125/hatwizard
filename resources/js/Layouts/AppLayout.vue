<script setup>
import FooterNav from "@/Components/FooterNav.vue";
import HeaderNav from "@/Components/HeaderNav.vue";

</script>

<template>
    <div>
        <div class="min-h-screen bg-white2">

            <HeaderNav />
            <!-- Page Content -->
            <main>
                <slot />
            </main>

            <FooterNav />
        </div>
    </div>
</template>
