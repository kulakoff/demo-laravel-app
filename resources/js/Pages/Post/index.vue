<template>
        <h1 class="text-lg mb-8">Posts</h1>
        <div class="mb-8">
            <Link :href="route('post.create')"
                  class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white">
                Add Post
            </Link>
        </div>
        <div v-if="posts">
            <div class="mt-8 pt-8 border-t border-gray-300" v-for="post in posts">
                <div>id: {{post.id}}</div>
                <div>title: {{post.title}}</div>
                <div>content: {{post.content}}</div>
                <div class="text-sm text-right">{{post.date}}</div>
                <div class="mt-4 text-sm text-right">
                    <Link :href="route('post.show', post.id)" class="text-sky-500">Show</Link>
                </div>
                <div class="mt-4 text-sm text-right">
                    <Link :href="route('post.edit', post.id)" class="text-sky-500">Edit</Link>
                </div>
                <div class="mt-4 text-sm text-right">
                    <p @click="deletePost(post.id)" class="cursor-pointer text-red-500">Delete</p>
                </div>
            </div>
        </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "index",
    layout: MainLayout,
    props: ['posts'],
    components: {
        Link
    },
    methods:{
        deletePost(id){
            this.$inertia.delete(`/posts/${id}`)
        },
    }
}
</script>

<style scoped>

</style>
