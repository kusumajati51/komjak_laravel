<template>
    <div class="bg-white dark:bg-zinc-900 p-8">
        <h2 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2 text-center">TENTANG KOMJAK</h2>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <div class="h-1 w-16 bg-red-600 mb-4"></div>
                <h3 class="text-xl font-semibold text-zinc-700 dark:text-zinc-300 mb-4">
                    ORGANISASI PENGEMBANGAN DIRI KATOLIK
                </h3>
                <p class="text-zinc-600 dark:text-zinc-400 mb-6">
                    Kampus Orang Muda Jakarta (KOMJak) adalah program pengembangan diri
                    komprehensif bagi orang muda Katolik di Keuskupan Agung Jakarta
                    (KAJ).
                </p>
                <p class="text-zinc-600 dark:text-zinc-400 mb-6">
                    Sebagai program pengembangan diri komprehensif, KOMJak ingin
                    mewadahi arena pembelajaran bagi orang muda Katolik yang ingin
                    mengembangkan dirinya secara menyeluruh, dari aspek
                    kognitif/intelektual, afektif/olah rasa, hingga konatif/sikap,
                    perilaku, dan keterampilan hidup.
                </p>
                <button class="bg-red-600 text-white py-2 px-4 rounded-lg">READ MORE</button>
            </div>
            <div class="relative">

                <div class="absolute inset-0 bg-zinc-600 ">
                    <!-- <img class="object-none h-full w-full" :src="sc_gen_kom"> -->
                </div>
                <div class="relative bg-zinc-800 h-64 w-64">
                    <img class="object-fill h-full w-full" :src="sc_gen_kom">
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
import sc_gen_kom from '../../../assets/profile/background/sc_gen_kom.jpg'

</script>