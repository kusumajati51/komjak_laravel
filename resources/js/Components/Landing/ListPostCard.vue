<script setup>
import PostCard from '../PostCard.vue';


</script>
<template>
    <div class="p-20">
        <div v-if="items.length > 0" class="grid grid-cols-1 gap-3">
            <h2 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2 text-center">Berita KOMJAK</h2>
            <div class="p-20 grid grid-cols-4 gap-3">
                <PostCard v-for="post in items " :key="post.slug" :post="post" />
            </div>
        </div>
        <div v-else class="flex justify-center items-center h-64">
            <p class="text-gray-500">No posts available</p>
        </div>
    </div>
</template>

<script>
export default {

    props: {
        items: Array,
        default: () => [],
    },

}
</script>