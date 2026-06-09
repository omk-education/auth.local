<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Главная"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Главная</h1>
            <div class="slider">
                <img
                    class="slider__image"
                    src="images/image06.jpg"
                    alt="Класс"
                />
                <img
                    class="slider__image"
                    src="images/image07.jpg"
                    alt="Класс"
                />
                <img
                    class="slider__image"
                    src="images/image08.jpg"
                    alt="Класс"
                />
                <img
                    class="slider__image"
                    src="images/image09.jpg"
                    alt="Класс"
                />
                <!-- <img class="slider__image" src="images/image10.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image11.jpg" alt="Класс" />
                    <img class="slider__image" src="images/image12.webp" alt="Класс" />
                    <img class="slider__image" src="images/image13.webp" alt="Класс" /> -->
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
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 20px;
    padding: 1rem;
}

.slider__image {
    object-fit: cover;
    width: 100%;
    border-radius: 40px;
}
</style>
