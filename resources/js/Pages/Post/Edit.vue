<template>
    <MainLayout>
        <h1 class="text-lg mb-2">Edit post</h1>
        <div class="mb-8">
        <Link :href="route('post.index')" class="text-sm text-sky-500">Back</Link>
        </div>
        <form @submit.prevent="update">
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
                    type="submit">Update
                </button>
            </div>
        </form>
    </MainLayout>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "index",
    // layout: MainLayout,
    components: {
        Link,
        MainLayout
    },
    props: ['post'],
    data() {
        return {
            title: this.post.title,
            content: this.post.content,
        }
    },

    methods: {
        update() {
            // console.log({title: this.title, content: this.content})
            this.$inertia.patch('/posts', {title: this.title, content: this.content})
        }
    }
}
</script>

<style scoped>

</style>
