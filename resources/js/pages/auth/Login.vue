<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    login: null,
    password: null,
    remember: false,
});
</script>

<template>
    <Head title="Авторизация"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Авторизация</h1>
            <form
                class="form"
                @submit.prevent="form.post(route('authenticate'))"
            >
                <!-- login -->
                <div class="form__row">
                    <label class="form__label" for="login"> Логин </label>
                    <input
                        class="form__input"
                        type="text"
                        id="login"
                        autocomplete="on"
                        v-model="form.login"
                    />
                    <div class="form__error" v-if="form.errors.login">
                        {{ form.errors.login }}
                    </div>
                </div>

                <!-- password -->
                <div class="form__row">
                    <label class="form__label" for="password"> Пароль </label>
                    <input
                        class="form__input"
                        type="password"
                        id="password"
                        autocomplete="on"
                        v-model="form.password"
                    />
                    <div class="form__error" v-if="form.errors.password">
                        {{ form.errors.password }}
                    </div>
                </div>
                <!-- remember me -->
                <div class="form__row">
                    <input type="checkbox" v-model="form.remember" /> Запомнить
                    меня
                </div>
                <!-- submit -->
                <div class="form__row">
                    <button type="submit" :disabled="form.processing">
                        Вход
                    </button>
                </div>
            </form>
        </div>
    </Layout>
</template>

<style lang="scss">
.home {
    &__title {
    }
}
</style>
