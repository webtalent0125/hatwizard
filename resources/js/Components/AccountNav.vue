<script setup>
import NavLink from "@/Components/NavLink.vue";
</script>

<template>
        <div class="bg-primary10 overflow-hidden shadow-sm sm:rounded-lg w-[315px] px-8 py-12 space-y-4">
            <div>
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                    My Orders
                </NavLink>
            </div>
            <div>
                <NavLink :href="route('dashboard.address')" :active="route().current('dashboard.address')">
                    Addresses
                </NavLink>
            </div>
            <div>
                <NavLink :href="route('dashboard.account')" :active="route().current('dashboard.account')">
                    Account Details
                </NavLink>
            </div>
            <div>
                <NavLink :href="route('logout')" method="post" as="button">
                    Logout
                </NavLink>
            </div>
        </div>
</template>
