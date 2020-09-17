<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-xl mx-auto rounded overflow-hidden shadow-md mb-5">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 shadow-sm">{{thread.title}}</div>
                    <p class="text-gray-700 text-base">
                        {{thread.body}}
                    </p>
                </div>
            </div>
            <div v-for="reply in replies" class="max-w-xl mx-auto rounded overflow-hidden shadow-md mb-5">
                <div class="px-6 py-4">
                    <div class="font-bold text-sm mb-2 shadow-sm">
                        <inertia-link href="#">{{reply.author}}</inertia-link> said {{reply.created_when}}...
                    </div>
                    <p class="text-gray-700 text-base">
                        {{reply.body}}
                    </p>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";
export default {
    name: "Show",
    components: {AppLayout},
    props: {
        thread: Object,
        replies: Object
    }
}
</script>

<style scoped>

</style>
