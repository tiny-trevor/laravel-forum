<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Forum Threads
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div v-for="thread in threads" :key="thread.id">
                        <div class="font-bold text-xl mb-2">
                            <inertia-link :href="path(thread)">{{thread.title}}</inertia-link>
                        </div>
                        <p class="text-gray-700 text-base">
                            {{thread.body}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";

export default {
    name: "Index",
    components: {
        AppLayout,
    },
    props: {
        threads: Array,
    },
    methods: {
        path: function(thread) {
            return '/threads/' + thread.id;
        }
    }

}
</script>

<style scoped>

</style>
