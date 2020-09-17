<template>
    <div class="px-6 py-4">
        <div class="font-bold text-sm mb-2 shadow-sm">
            <inertia-link href="#">{{reply_data.author}}</inertia-link> said {{reply_data.created_when}}...
        </div>
        <p class="text-gray-700 text-base">
            {{reply_data.body}}
        </p>
    </div>
</template>

<script>
export default {
    name: "Reply",
    props: {
        reply_data: Object
    }
}
</script>

<style scoped>

</style>
