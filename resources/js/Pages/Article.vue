<template>
    <LandingPageLayout>
        <template #app-bar>
            <div class="fixed top-0 left-0 right-0 bg-white  dark:bg-gray-900 shadow-md z-50">
                <div class="flex flex-1 items-center justify-center sm:items-stretch">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-20" src="../../assets/icons/icon_komjak.png" alt="Your Company" />
                    </div>
                </div>

            </div>
        </template>
        <div class="max-w-3xl mx-auto">
            <img class="w-full" :src="itemPosts.image" :alt="itemPosts.alt" />
            <small class="font-mono text-sm" v-if="itemPosts.caption">{{
                itemPosts.caption
                }}</small>
            <h1 class="text-4xl font-bold text-black text-center dark:text-white mt-4 align-center">
                {{ itemPosts.title }}
            </h1>
            <article
                class="mt-4 prose prose-h2:text-gray-950 prose-strong:text-gray-950 text-gray-950 dark:text-grey-100"
                v-html="itemPosts.content"></article>
        </div>
    </LandingPageLayout>

</template>

<script setup>
import LandingPageLayout from "@/Layouts/LandingPageLayout.vue";
import { defineProps } from "vue";

defineProps({
    itemPosts: Object
});
</script>