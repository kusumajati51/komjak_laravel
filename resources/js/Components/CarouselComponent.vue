<template>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item" v-for="(slide, index) in slides" :key="index"
                :class="{ active: index === currentIndex }">
                <img :src="slide.src" :alt="'Slide ' + (index + 1)" class="w-full h-96 object-cover">
            </div>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from 'vue';

const slides = ref([
    { src: 'https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg' },
    { src: 'https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg' },
    { src: 'https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg' }
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