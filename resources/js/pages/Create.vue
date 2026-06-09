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
            <form
                class="form"
                @submit.prevent="form.post(route('home'))"
            >
                <!-- name -->
                <div class="form__row">
                    <label class="form__label" for="name"> Курс </label>
                    <!-- <input
                        class="form__input"
                        type="text"
                        id="name"
                        autocomplete="on"
                        v-model="form.name"
                    /> -->
                    <select class="form__input" name="" id="">
                        <option>
                            Основы алгоритмизации и программирования
                        </option>
                        <option>Основы веб-дизайна</option>
                        <option>Основы проектирования баз данных</option>
                    </select>
                    <div class="form__error" v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>

                <!-- email -->
                <div class="form__row">
                    <label class="form__label" for="email">
                        Дата начала обучения
                    </label>
                    <input
                        class="form__input"
                        type="date"
                        id="email"
                        autocomplete="on"
                        v-model="form.email"
                    />
                    <div class="form__error" v-if="form.errors.email">
                        {{ form.errors.email }}
                    </div>
                </div>

                <!-- tel -->
                <div class="form__row">
                    <label class="form__label" for="tel"> Телефон </label>
                    <input
                        class="form__input"
                        type="tel"
                        id="tel"
                        autocomplete="on"
                        v-model="form.tel"
                    />
                    <div class="form__error" v-if="form.errors.tel">
                        {{ form.errors.tel }}
                    </div>
                </div>

                <div class="form__row">
                    <label class="form__label" for="name"> Способ оплаты </label>
                    <!-- <input
                        class="form__input"
                        type="text"
                        id="name"
                        autocomplete="on"
                        v-model="form.name"
                    /> -->
                    <select class="form__input" name="" id="">
                        <option>
                            Наличными
                        </option>
                        <option>По номеру телефона</option>
                    </select>
                    <div class="form__error" v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>

                <!-- submit -->
                <div class="form__row">
                    <button
                        class="form__btn"
                        type="submit"
                        :disabled="form.processing"
                    >
                        Отправить
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
