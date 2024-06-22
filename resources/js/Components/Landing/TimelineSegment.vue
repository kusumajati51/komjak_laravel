<template>
    <div class="mt-5 bg-white border border-gray-200 rounded-lg shadow grid grid-rows-2">
        <a href="#">
            <img class="rounded-t-lg aspect-5 object-cover h-full w-full" src="../../../assets/profile/background/k0.jpg" alt="" />
        </a>
        <div class="p-5 row-start-2">
            <v-timeline direction="horizontal" side="end">
                <v-timeline-item v-for="(time, i) in timesLines" :key="i" :dot-color="time.color">
                    <template v-slot:opposite>
                        <div class="font-lenotype-feltpen text-5xl font-bold">
                            {{ time.year }}
                        </div>
                    </template>
                    <div>
                        <div class="text-h6 text-base whitespace-pre-line">{{ time.title }}</div>
                        <p class="text-base whitespace-pre-line">
                            {{ time.description }}
                        </p>
                    </div>
                   
                </v-timeline-item>
            </v-timeline>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            timesLines: [
                {
                    year: "2009",
                    title: "EMBRIO KOMJAK \n (2009 - 2010): ",
                    description: "Pembentukan konsep \n dan tim, awal perjalanan \n KOMJak sebagai \n komunitas pemuda\n Katolik",
                    icon: "mdi-sack",
                    color: 'red-lighten-2',
                },
                {

                    year: "2010",
                    title: "ERA PERINTISAN \n (2010 - 2014):",
                    description: "Fondasi program, \n identitas, dan struktur, \n mengokohkan eksistensi \n KOMJak di Jakarta.",
                    icon: "mdi-sail-boat-sink",
                    color: 'purple-lighten-2',
                },
                {

                    year: "2014",
                    title: "ERA BERKEMBANG \n (2014 - 2019): ",
                    description: "Pembentukan konsep \n dan tim, awal perjalanan \n KOMJak sebagai \n komunitas pemuda\n Katolik",
                    icon: "mdi-sail-boat-sink",
                    color: 'blue-lighten-2',
                },
                {

                    year: "2020",
                    title: "ADAPTASI ERA \n PANDEMI (2020 - 2023): ",
                    description: "Adaptasi dan transformasi, \n menghadapi tantangan \n pandemi.\n",
                    icon: "mdi-sail-boat-sink",
                    color: 'blue-lighten-2',
                },
                {

                    year: "2024",
                    title: "ERA REBRANDING \n (2024): ",
                    description: "Modernisasi dan fokus \n generasi baru,\n memperkuat relevansi \n dan daya tariK \n KOMJak",
                    icon: "mdi-sail-boat-sink",
                    color: 'yellow-lighten-2',
                },
            ]
        }

    }
}
</script>