<template>
    <div id="app" class="">
        <div class="bg-white dark:bg-zinc-900 p-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 ">
                <h2 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2 text-center">Sejarah KOMJAK</h2>
                <p class="text-zinc-600 dark:text-zinc-400 mb-6 text">
                    Embrio KOMJak dipelopori oleh seorang SCJ dan para aktivis multi-fokus yang bersama-sama membangun
                    sistem pengembangan diri orang muda yang komprehensif, dengan tujuan menjadikan orang muda Katolik
                    yang berintegritas, berpengetahuan luas, berjiwa sosial tinggi, dan bertanggung jawab
                </p>
            </div>

        </div>
        <ol class="items-center bg-white dark:bg-zinc-900 px-4 pb-10 sm:flex">
            <li class="relative mb-6 sm:mb-0" v-for="(item, index) in timelineItems" :key="index">
                <TimelineSegment :item="item" :isEven="index % 2 === 0" />
            </li>
        </ol>
        <!-- <FounderKomjak /> -->
    </div>
</template>

<script>
import FounderKomjak from "./FounderKomjak.vue";
import TimelineSegment from "./TimelineSegment.vue";
import { initFlowbite } from 'flowbite'

export default {
    components: { TimelineSegment, FounderKomjak },
    mounted() {
        initFlowbite();  
    },
    data() {
        return {
            lineClass: 'absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-zinc-200 dark:bg-zinc-700',
            timelineItems: [
                {
                    year: "(2009 - 2010)",
                    title: "EMBRIO KOMJAK : ",
                    description: "Pembentukan konsep \n dan tim, awal perjalanan \n KOMJak sebagai \n komunitas pemuda\n Katolik",
                    icon: "mdi-sack",
                    color: 'red-lighten-2',
                },
                {

                    year: " (2010 - 2014)",
                    title: "ERA PERINTISAN",
                    description: "Fondasi program, \n identitas, dan struktur, \n mengokohkan eksistensi \n KOMJak di Jakarta.",
                    icon: "mdi-sail-boat-sink",
                    color: 'purple-lighten-2',
                },
                {

                    year: "(2014 - 2019)",
                    title: "ERA BERKEMBANG \n : ",
                    description: "Pembentukan konsep \n dan tim, awal perjalanan \n KOMJak sebagai \n komunitas pemuda\n Katolik",
                    icon: "mdi-sail-boat-sink",
                    color: 'blue-lighten-2',
                },
                {

                    year: "(2020 - 2023)",
                    title: "ADAPTASI ERA  PANDEMI \n: ",
                    description: "Adaptasi dan transformasi, \n menghadapi tantangan \n pandemi.\n",
                    icon: "mdi-sail-boat-sink",
                    color: 'blue-lighten-2',
                },
                {

                    year: "{2024}",
                    title: "ERA REBRANDING  ",
                    description: "Modernisasi dan fokus \n generasi baru,\n memperkuat relevansi \n dan daya tariK \n KOMJak",
                    icon: "mdi-sail-boat-sink",
                    color: 'yellow-lighten-2',
                },
            ]
        };
    },
}
</script>