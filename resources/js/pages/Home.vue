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
                    alt="Кабинет"
                />
                <img
                    class="slider__image"
                    src="images/image07.jpg"
                    alt="Кабинет"
                />
                <img
                    class="slider__image"
                    src="images/image08.webp"
                    alt="Кабинет"
                />
                <img
                    class="slider__image"
                    src="images/image09.webp"
                    alt="Кабинет"
                />
            </div>
        </div>
    </Layout>
</template>

<style lang="scss">
.home {
    &__title {
        //
        @include h1;
    }
}

.slider {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
    padding: 20px;

    &__image {
        width: 100%;
        border-radius: 20px;
    }
}
</style>
