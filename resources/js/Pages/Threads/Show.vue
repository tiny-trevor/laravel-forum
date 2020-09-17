<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-xl mx-auto rounded overflow-hidden shadow-md mb-5">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 shadow-sm">
                        <inertia-link href="#">{{thread.author}}</inertia-link> posted:
                        {{thread.title}}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{thread.body}}
                    </p>
                </div>
            </div>
            <div v-for="reply in replies" class="max-w-xl mx-auto rounded overflow-hidden shadow-md mb-5">
                <reply-component :reply_data="reply"></reply-component>
            </div>

            <div v-if="$page.user !== null" class="max-w-xl mx-auto">
                <form @submit.prevent="submit">
                    <textarea id="body" name="body" placeholder="Have something to say?" rows="5" v-model="form.body" class="bg-white focus:outline-none border border-gray-300 rounded-md py-2 px-4 block appearance-none leading-normal w-full"></textarea>
                    <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 my-2 rounded">Post</button>
                </form>
            </div>
            <div v-else class="max-w-xl mx-auto">
                <p>Please <a href="/login">sign in</a> to participate in this discussion.</p>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout";
import Reply from "../../Pages/Threads/Reply";

export default {
    name: "Show",
    components: {
        AppLayout,
        'reply-component': Reply
    },
    data() {
        return {
            form: {
                body: null
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.thread.path+'/replies', this.form)
        }
    },
    props: {
        thread: Object,
        replies: Array
    }
}
</script>

<style scoped>

</style>
