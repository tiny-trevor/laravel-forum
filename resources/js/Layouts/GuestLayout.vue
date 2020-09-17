<template>
    <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/dashboard">
                            <jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <jet-nav-link href="/dashboard" :active="$page.currentRouteName == 'dashboard'">
                            Dashboard
                        </jet-nav-link>
                        <jet-nav-link href="/threads" :active="$page.currentRouteName == 'threads'">
                            All Threads
                        </jet-nav-link>
                    </div>
                </div>

                <!-- Login/Register -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="ml-3 relative">
                        <a href="/login" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            Login
                        </a>

                        <a href="/register" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            Register
                        </a>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <jet-responsive-nav-link href="/dashboard" :active="$page.currentRouteName == 'dashboard'">
                    Dashboard
                </jet-responsive-nav-link>
                <jet-responsive-nav-link href="/threads" :active="$page.currentRouteName == 'threads'">
                    All Threads
                </jet-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="mt-3 space-y-1">
                        <jet-responsive-nav-link href="/login">
                            Login
                        </jet-responsive-nav-link>

                        <jet-responsive-nav-link href="/user/register">
                            Register
                        </jet-responsive-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import JetApplicationLogo from './../Jetstream/ApplicationLogo'
import JetApplicationMark from './../Jetstream/ApplicationMark'
import JetDropdown from './../Jetstream/Dropdown'
import JetDropdownLink from './../Jetstream/DropdownLink'
import JetNavLink from './../Jetstream/NavLink'
import JetResponsiveNavLink from './../Jetstream/ResponsiveNavLink'

export default {
    components: {
        JetApplicationLogo,
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,
    },
    name: "GuestLayout",
    data() {
        return {
            showingNavigationDropdown: false
        }
    },
    computed: {
        path() {
            return window.location.pathname
        },
    }
}
</script>

<style scoped>

</style>
