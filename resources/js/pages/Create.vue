<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    login: null,
    email: null,
    tel: null,
    password: null,
});
</script>

<template>
    <Head title="Создать заявку"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Создать заявку</h1>
            <form class="form" @submit.prevent="form.get(route('user'))">
                <!-- name -->
                <div class="form__row">
                    <label class="form__label" for="status">Название курса</label>

                    <select class="form__input" name="status" id="status">
                        <option>Основы алгоритмизации и программирования</option>
                        <option>Основы веб-дизайна</option>
                        <option>Основы проектирования баз данных</option>
                    </select>
                </div>

                <!-- email -->
                <div class="form__row">
                    <label class="form__label" for="date">
                        Дата начала обучения
                    </label>
                    <input
                        class="form__input"
                        type="date"
                        id="date"
                        autocomplete="on"
                        v-model="form.date"
                    />
                    <div class="form__error" v-if="form.errors.date">
                        {{ form.errors.date }}
                    </div>
                </div>

                <div class="form__row">
                    <label class="form__label" for="status">Способ оплаты</label>

                    <select class="form__input" name="status" id="status">
                        <option>Наличными</option>
                        <option>По номеру телефона</option>
                    </select>
                </div>
                <!-- submit -->
                <div class="form__row">
                    <button
                        class="form__btn"
                        type="submit"
                        :disabled="form.processing"
                    >
                        Создать заявку
                    </button>
                </div>
            </form>
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
