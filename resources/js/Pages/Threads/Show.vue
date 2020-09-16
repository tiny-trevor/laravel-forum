<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-xl mx-auto rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{thread.title}}</div>
                    <p class="text-gray-700 text-base">
                        {{thread.body}}
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
    }
}
</script>

<style scoped>

</style>
