<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-2">Create</h1>
        <div class="mb-8">
        <Link :href="route('post.index')" class="text-sm text-sky-500">Back</Link>
        </div>
        <form @submit.prevent="store">
            <div class="mb-4">
                <input v-model="title" class="w-full rounded-full border-gray-300 align-middle" type="text"
                       placeholder="Title">
            </div>
            <div class="mb-4">
                <textarea v-model="content" class="w-full rounded-full border-gray-300"
                          placeholder="Content"></textarea>
            </div>
            <div>
                <button
                    class="ml-auto hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white"
                    type="submit">Create
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "index",
    components: {
        Link
    },

    date() {
        return {
            title: "",
            content: ""
        }
    },

    methods: {
        store() {
            this.$inertia.post('/posts', {title: this.title, content: this.content})
        }
    }
}
</script>

<style scoped>

</style>
