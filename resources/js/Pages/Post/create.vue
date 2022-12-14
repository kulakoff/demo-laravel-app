<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form>
            <div class="mb-4">
                <input class="w-full rounded-full border-gray-300" type="text" placeholder="Title">
            </div>
            <div class="mb-4">
               <textarea class="w-full rounded-full border-gray-300" placeholder="Content"></textarea>
            </div>
            <div>
                <button class="ml-auto hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white" type="submit">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "index",
    components:{
        Link
    }
}
</script>

<style scoped>

</style>
