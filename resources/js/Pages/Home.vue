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
import { onMounted } from 'vue';
import { initFlowbite, initTabs } from 'flowbite';
import ListPostCard from '@/Components/Landing/ListPostCard.vue';
import TabsComponent from '@/Components/TabsComponent.vue';

onMounted(() => {
    initFlowbite();
    initTabs();
});


</script>
<template>

    <Head title="Welcome">

    </Head>
    <LandingPageLayout>
        
        <TabsComponent :tabs="tabs">
            <template #jumbotron>
                <BerandaSegment />
            </template>
        </TabsComponent>


    </LandingPageLayout>
</template>

<script>
export default {
    props: {
        itemsPosts: Array
    },
    data() {
        return {
            tabs: [
                { label: 'Tentang Komjak', component: TentangKomjak },
                // { label: 'Sejarah Komjak', component: HistoryKomjak },
                { label: 'Aspek Komjak', component: AspekKomjak },
                {
                    label: 'Berita Komjak',
                    component: ListPostCard,
                    props: {
                        items: this.itemsPosts
                    }
                },

            ],
        }
    }
}
</script>


<style>

</style>