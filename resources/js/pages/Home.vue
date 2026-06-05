<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';

const track = ref(null);
let currentIndex = 0;
let interval = null;

const visibleSlides = 4;
const totalImages = 8;

const moveToSlide = () => {
    if (track.value) {
        const offset = -currentIndex * 100; // сдвиг на 100% (полная группа из 4)
        track.value.style.transform = `translateX(${offset}%)`;
    }
};

const nextSlide = () => {
    currentIndex = (currentIndex + 1) % 2; // 2 группы по 4
    moveToSlide();
};

const prevSlide = () => {
    currentIndex = (currentIndex - 1 + 2) % 2;
    moveToSlide();
};

onMounted(() => {
    track.value = document.querySelector('.slider__track');
    moveToSlide();

    interval = setInterval(nextSlide, 3000);
});

onUnmounted(() => {
    if (interval) clearInterval(interval);
});
</script>

<template>
    <Head title="Главная"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Главная</h1>
            <div class="slider">
                <div class="slider__track">
                    <img class="slider__image" src="images/image06.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image07.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image08.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image09.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image10.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image11.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image12.webp" alt="Класс" />
                    <img class="slider__image" src="images/image13.webp" alt="Класс" />
                </div>

                <button class="slider__prev" @click="prevSlide">«</button>
                <button class="slider__next" @click="nextSlide">»</button>
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
    padding: 1rem;
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
}

.slider__track {
    display: flex;
    transition: transform 0.6s ease;
    width: 200%;                    /* 8 / 4 = 200% */
}

.slider__image {
    width: 25%;                     /* 100% / 4 = 25% */
    flex-shrink: 0;
    padding: 0 8px;
    border-radius: 20px;
    object-fit: cover;
    height: 340px;                  /* чуть увеличил для лучшего вида */
    box-sizing: border-box;
}

.slider__prev,
.slider__next {
    font-size: 3rem;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 12px 18px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
}

.slider__prev { left: 15px; }
.slider__next { right: 15px; }
</style>
