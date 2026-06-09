<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';

const images = [
    'images/image06.jpg',
    'images/image07.jpg',
    'images/image08.jpg',
    'images/image09.jpg',
    'images/image10.jpg',
    'images/image11.jpg',
    'images/image12.webp',
    'images/image13.webp',
];

const visibleCount = 4;
const total = images.length;
const maxIndex = total - visibleCount;

const currentIndex = ref(0);
const imageWidth = ref(0);
const trackRef = ref(null);
let timer = null;

const updateImageWidth = () => {
    if (trackRef.value && trackRef.value.children[0]) {
        imageWidth.value = trackRef.value.children[0].offsetWidth;
    }
};

const nextSlide = () => {
    currentIndex.value =
        currentIndex.value < maxIndex ? currentIndex.value + 1 : 0;
};

const prevSlide = () => {
    currentIndex.value =
        currentIndex.value > 0 ? currentIndex.value - 1 : maxIndex;
};

const resetTimer = () => {
    if (timer) clearInterval(timer);
    timer = setInterval(nextSlide, 3000);
};

const handleNext = () => {
    nextSlide();
    resetTimer();
};

const handlePrev = () => {
    prevSlide();
    resetTimer();
};

onMounted(() => {
    updateImageWidth();
    resetTimer();
    window.addEventListener('resize', updateImageWidth);
});

onUnmounted(() => {
    if (timer) clearInterval(timer);
    window.removeEventListener('resize', updateImageWidth);
});
</script>

<template>
    <Head title="Главная" />
    <Layout>
        <div class="home">
            <h1 class="home__title">Главная</h1>

            <div class="slider">
                <div
                    class="slider__track"
                    ref="trackRef"
                    :style="{
                        transform: `translateX(-${currentIndex * imageWidth}px)`,
                        transition: 'transform 0.3s ease',
                    }"
                >
                    <img
                        v-for="(src, idx) in images"
                        :key="idx"
                        class="slider__image"
                        :src="src"
                        :alt="'Класс ' + (idx + 1)"
                    />
                </div>

                <button class="slider__prev" @click="handlePrev">‹</button>
                <button class="slider__next" @click="handleNext">›</button>
            </div>
        </div>
    </Layout>
</template>

<style lang="scss">
.home {
    display: grid;
    align-content: start;
    &__title {
        @include h1;
    }
}

.slider {
    position: relative;
    overflow: hidden;

    &__track {
        display: flex;
        white-space: nowrap;
    }

    &__image {
        display: block;
        width: 25%; /* ровно 4 изображения в ряд */
        flex-shrink: 0;
    }

    &__prev,
    &__next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        font-size: 2rem;
        cursor: pointer;
        padding: 0 1rem;
        height: 3rem;
        line-height: 3rem;
        &:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    }
    &__prev {
        left: 0;
    }
    &__next {
        right: 0;
    }
}
</style>
