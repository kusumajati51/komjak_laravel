<script setup>
import AboutSegment from '@/Components/Landing/AboutSegment.vue';
import TentangKomjak from '@/Components/Landing/TentangKomjak.vue';
import FounderKomjak from '@/Components/Landing/FounderKomjak.vue';
import BerandaSegment from '@/Components/Landing/BerandaSegment.vue';
import ProfileCard from '@/Components/ProfileCard.vue';
import MidSegment from '@/Components/Landing/MidSegment.vue';
import PostCard from '@/Components/PostCard.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import LandingPageLayout from '@/Layouts/LandingPageLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    posts: Array
});


</script>
<template>

    <Head title="Welcome">

    </Head>
    <LandingPageLayout>
        <div>
            <BerandaSegment />
        </div>
        <div>
            <TentangKomjak />
        </div>

        <div>
            <FounderKomjak />
        </div>
        <!-- <div>
            <MidSegment />
        </div> -->
        <div class="p-20 grid grid-cols-4 gap-3">
            <PostCard v-for="post in posts " :key="post.slug" :post="post" />
        </div>
    </LandingPageLayout>
</template>



<style></style>