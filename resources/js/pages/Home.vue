<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted, onUnmounted, ref } from 'vue';

const track = ref(null);
let currentIndex = 0;
let interval = null;

const slideWidth = 4; // сколько изображений видно одновременно
const totalImages = 8;

const moveToSlide = () => {
    if (track.value) {
        const offset = -currentIndex * (100 / slideWidth);
        track.value.style.transform = `translateX(${offset}%)`;
    }
};

const nextSlide = () => {
    currentIndex = (currentIndex + 1) % Math.ceil(totalImages / slideWidth);
    moveToSlide();
};

const prevSlide = () => {
    currentIndex = (currentIndex - 1 + Math.ceil(totalImages / slideWidth)) % Math.ceil(totalImages / slideWidth);
    moveToSlide();
};

onMounted(() => {
    track.value = document.querySelector('.slider__track');

    // Инициализация
    moveToSlide();

    // Автосмена каждые 3 секунды
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
                <!-- Track для сдвига -->
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
    overflow: hidden;           /* важно для карусели */
    border-radius: 20px;

    &__track {
        display: flex;
        transition: transform 0.5s ease;
        width: 200%;               /* 8 изображений / 4 = 200% */
    }

    &__image {
        width: 25%;                /* 100% / 4 = 25% */
        flex-shrink: 0;
        padding: 0 10px;
        border-radius: 20px;
        object-fit: cover;
    }

    &__prev,
    &__next {
        font-size: 3rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 10px 14px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    &__prev { left: 1.2rem; }
    &__next { right: 1.2rem; }
}
</style>
