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
        <div>
            <article class="prose">
                <h1 class="text-3xl font-bold">{{ itemPosts.title }}</h1>
                <div class="mt-4" v-html="itemPosts.content"></div>
            </article>
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