<template>
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-lg overflow-hidden">
        <img :src="profile.image" alt="Profile Image" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-zinc-900 dark:text-white font-bold">{{ profile.name }}</h3>
            <p class="text-yellow-600">{{ profile.title }}</p>
            <div class="flex space-x-2 mt-2">
                <a v-for="(social, index) in profile.socials" :key="index" :href="social.link" :class="textClass">
                    <img :src="social.icon" :alt="social.name" />
                </a>
            </div>
            <button class="bg-red-600 text-white mt-4 py-2 px-4 rounded">Read More</button>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
const containerClass = 'bg-white dark:bg-zinc-900 p-6';
const headerClass = 'text-3xl font-bold text-center dark:text-white mb-6';
const textClass = 'text-zinc-600 dark:text-zinc-400';
export default {
    props: {
        'profile': Object
    }
}
</script>