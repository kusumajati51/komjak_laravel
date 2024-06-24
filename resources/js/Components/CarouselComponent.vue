<template>
    <div class="carousel w-full">
        <div class="carousel-inner w-full">
            <div class="carousel-item w-full" style="height: 600px" v-for="(slide, index) in slides" :key="index"
                :class="{ active: index === currentIndex }">
                <img :src="slide.src" :alt="'Slide ' + (index + 1)" class="w-full h-full object-fill">
            </div>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from 'vue';
import slide1 from '../../assets/profile/banner/Slide1.jpg'
import slide2 from '../../assets/profile/banner/Slide2.jpg'
import slide3 from '../../assets/profile/banner/Slide3.jpg'
import slide4 from '../../assets/profile/banner/Slide4.jpg'
import slide5 from '../../assets/profile/banner/Slide5.jpg'
import slide6 from '../../assets/profile/banner/Slide6.jpg'
import slide7 from '../../assets/profile/banner/Slide7.jpg'
import slide8 from '../../assets/profile/banner/Slide8.jpg'
import slide9 from '../../assets/profile/banner/Slide9.jpg'
import slide10 from '../../assets/profile/banner/Slide10.jpg'
import slide11 from '../../assets/profile/banner/Slide11.jpg'

const slides = ref([
    // { src: 'https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg' },
    // { src: 'https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg' },
    // { src: 'https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg' }
    { src: slide1 },
    { src: slide2 },
    { src: slide3 },
    { src: slide4 },
    { src: slide5 },
    { src: slide6 },
    { src: slide7 },
    { src: slide8 },
    { src: slide9 },
    { src: slide10 },
    { src: slide11 },
]);
const currentIndex = ref(0);

const showSlide = (index) => {
    currentIndex.value = index;
};

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % slides.value.length;
};

onMounted(() => {
    setInterval(nextSlide, 5000); // Change interval to 10 seconds
});
</script>
<style scoped>
.carousel {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    min-width: 100%;
    transition: opacity 0.5s ease;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
}

.carousel-item.active {
    opacity: 1;
    position: relative;
}
</style>