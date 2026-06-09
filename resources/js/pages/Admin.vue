<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Layout>
        <div class="home">
            <Head title="Главная"></Head>
            <h1 class="home__title">Панель администратора</h1>
            <div class="cards">


                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 06-06-2026</p>
                        <p>Оплата: наличными</p>
                        <p>Телефон: +7777777777777</p>

                        <select class="form__input">
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>


                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 06-06-2026</p>
                        <p>Оплата: наличными</p>
                        <p>Телефон: +7777777777777</p>

                        <select class="form__input">
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>


                <article class="card">
                    <header>
                        <h2>🟡Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 06-06-2026</p>
                        <p>Оплата: наличными</p>
                        <p>Телефон: +7777777777777</p>

                        <select class="form__input">
                            <!-- <option>Новая</option> -->
                            <option selected>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>


                <article class="card">
                    <header>
                        <h2>🔵Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 06-06-2026</p>
                        <p>Оплата: наличными</p>
                        <p>Телефон: +7777777777777</p>

                        <select class="form__input" disabled>
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option selected>Обучение завершено</option>
                        </select>

                        <button class="form__btn" disabled>Изменить</button>
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
    place-items: center;
    //
    &__title {
        //
        @include h1;
    }
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    grid-gap: 20px;
}

.card {
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
