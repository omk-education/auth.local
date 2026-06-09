<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Layout>
        <div class="home">
            <Head title="Мои заявки"></Head>
            <h1 class="home__title">Мои заявки</h1>
            <div class="cards">
                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p><b>Дата начала обучения:</b> 06-06-2026</p>
                        <p><b>Оплата:</b> наличными</p>
                        <p><b>Телефон:</b> +7777777777777</p>
                        <p><b>Статус:</b> Новая</p>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p><b>Дата начала обучения:</b> 06-06-2026</p>
                        <p><b>Оплата:</b> наличными</p>
                        <p><b>Телефон:</b> +7777777777777</p>
                        <p><b>Статус:</b> Новая</p>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🟡Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p><b>Дата начала обучения:</b> 06-06-2026</p>
                        <p><b>Оплата:</b> наличными</p>
                        <p><b>Телефон:</b> +7777777777777</p>
                        <p><b>Статус:</b> Идет обучение</p>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🔵Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p><b>Дата начала обучения:</b> 06-06-2026</p>
                        <p><b>Оплата:</b> наличными</p>
                        <p><b>Телефон:</b> +7777777777777</p>
                        <p><b>Статус:</b> Обучение завершено</p>
                    </div>
                </article>
            </div>
        </div>
    </Layout>
</template>

<style lang="scss">
.home {
    display: grid;
    gap: 10px;
    align-items: start;
    justify-items: center;
    align-content: start;
    //
    &__title {
        //
        @include h1;
    }
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    grid-gap: 20px;
    padding: 1rem;
}

.card {
    background-color: #ffffffa5;
    display: grid;
    // grid-template-rows: max-content 200px 1fr;
    border: 1px solid #000;
    padding: 1rem;
    border-radius: 10px;
    gap: 10px;
}

.card img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

.content {
    display: grid;
    gap: 10px;
}
</style>
