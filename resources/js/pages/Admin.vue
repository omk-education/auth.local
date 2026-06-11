<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Главная"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Панель администратора</h1>

            <label class="form__label" for="status">Статус</label>

            <select class="form__input" name="status" id="status">
                <option>Все</option>
                <option>Новая</option>
                <option>Идет обучение</option>
                <option>Обучение завершено</option>
            </select>

            <div class="cards">
                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
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
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
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
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🟡Основы проектирования баз данных</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🟡Основы веб-дизайна</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
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
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🔵Основы веб-дизайна</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select
                            class="form__input"
                            name="status"
                            id="status"
                            disabled
                        >
                            <option>Обучение завершено</option>
                        </select>

                        <p>
                            <b>Отзыв:</b> курс очень понравился. Крутые преподаватели
                        </p>
                    </div>
                </article>

                <article class="card">
                    <header>
                        <h2>🟢Основы алгоритмизации и программирования</h2>
                    </header>
                    <div class="content">
                        <p>Дата начала обучения: 11.06.2026</p>
                        <p>Телефон: +7(999)77-77-777</p>

                        <label class="form__label" for="status">Статус</label>

                        <select class="form__input" name="status" id="status">
                            <option>Новая</option>
                            <option>Идет обучение</option>
                            <option>Обучение завершено</option>
                        </select>

                        <button class="form__btn">Изменить</button>
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
    align-content: start;
    justify-content: center;
    &__title {
        //
        @include h1;
    }
}

.cards {
    padding: 20px;

    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    grid-gap: 20px;
}

.card {
    border: 1px solid #999999;
    border-radius: 10px;

    display: grid;
    gap: 20px;
    padding: 1rem;

    background-color: #fff;
    animation: slide-in 0.5s linear;


}

@keyframes slide-in {
  from {

    transform: translateY(-10%);
  }

  to {
    transform: translateY(0%);
  }
}

.card h2 {
    margin: 0;
    padding: 0.5rem;
}

.card .content {
    padding: 0.5rem;
    display: grid;
    gap: 10px;
}
</style>
