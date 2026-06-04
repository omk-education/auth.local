<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Главная"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Главная</h1>
        </div>
    </Layout>
</template>

<style lang="scss">
.home {

    &__title {
        @include h1;
    }

}
</style>
