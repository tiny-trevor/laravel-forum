<template>
    <div class="min-h-screen bg-gray-100">
        <template v-if="$page.user !== null">
            <user-layout></user-layout>
        </template>

        <template v-else>
            <guest-layout></guest-layout>
        </template>
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header"></slot>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>

<script>
    import GuestLayout from "./GuestLayout";
    import UserLayout from "./UserLayout";

    export default {
        components: {
            UserLayout,
            GuestLayout
        }
    }
</script>
