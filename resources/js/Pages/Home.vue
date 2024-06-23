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
import HistoryKomjak from '@/Components/Landing/HistoryKomjak.vue';
import AspekKomjak from '@/Components/Landing/AspekKomjak.vue';


defineProps({
    posts: Array
});


</script>
<template>

    <Head title="Welcome">

    </Head>
    <LandingPageLayout>
        <div class=" bg-gray-100 dark:bg-gray-900 flex flex-1 items-center justify-center sm:items-stretch">
            <nav class="hidden md:flex space-x-4">
                <a href="#" class="hover:text-red-500">BERANDA</a>
                <a href="#" class="hover:text-red-500">TENTANG KOMJAK</a>
                <a href="#" class="hover:text-red-500">PENDIRI</a>
                <a href="#" class="hover:text-red-500">ANGKATAN</a>
                <a href="#" class="hover:text-red-500">KEGIATAN</a>
                <a href="#" class="hover:text-red-500">ARTIKEL</a>
                <a href="#" class="hover:text-red-500">KONTAK</a>
            </nav>
        </div>
        <div>
            <BerandaSegment />
        </div>
        <div>
            <TentangKomjak />
        </div>

        <div>
            <HistoryKomjak />
        </div>

        <div>
            <AspekKomjak/>
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