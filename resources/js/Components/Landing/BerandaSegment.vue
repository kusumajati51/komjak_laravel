<template>
    <div class="relative">
        <CarouselComponent />
        <div
            class="absolute inset-0 flex flex-col items-center justify-center text-center py-20 px-4 bg-black bg-opacity-50">
            <h1 class="text-3xl md:text-5xl font-bold text-white">KOMJAK</h1>
            <h2 class="text-2xl md:text-4xl font-bold text-white mt-2">KAMPUS ORANG MUDA JAKARTA</h2>
            <p class="text-lg md:text-xl mt-4 text-white max-w-2xl">
                Empowering young Catholics to reach
            </p>
            <p class="text-lg md:text-xl mt-4 text-white max-w-2xl">
                their full potential
            </p>
            <!-- <div class="flex space-x-4 mt-8">
                <button class="bg-red-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-red-600">
                    LEARN MORE <i class="fas fa-arrow-right"></i>
                </button>
                <button
                    class="border border-red-500 text-gray-700 px-6 py-2 rounded-lg font-bold hover:bg-red-500 hover:text-white">
                    WATCH VIDEO <i class="fas fa-play"></i>
                </button>
            </div> -->
        </div>

    </div>

</template>
<script>
import { FwbCarousel } from 'flowbite-vue'
import CarouselComponent from '../CarouselComponent.vue'
export default {
    components: {
        FwbCarousel,
        CarouselComponent
    },
    data: () => ({
        images: [
            { src: "https://picsum.photos/id/237/1024/800" },
            { src: "https://picsum.photos/id/238/1024/800" },
            { src: "https://picsum.photos/id/239/1024/800" }
        ],
        active: 0
    }),
    mounted() {
        let i = 0;
        setInterval(() => {
            if (i > this.images.length - 1) {
                i = 0;
            }
            this.active = i;
            i++;
        }, 2000);
    }
}
</script>