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
    <Head title="Регистрация"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Регистрация</h1>
            <form
                class="form"
                @submit.prevent="form.post(route('register.store'))"
            >
                <!-- name -->
                <div class="form__row">
                    <label class="form__label" for="name"> ФИО </label>
                    <input
                        class="form__input"
                        type="text"
                        id="name"
                        autocomplete="on"
                        v-model="form.name"
                    />
                    <div class="form__error" v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>

                <!-- email -->
                <div class="form__row">
                    <label class="form__label" for="email"> Электронная почта </label>
                    <input
                        class="form__input"
                        type="email"
                        id="email"
                        autocomplete="on"
                        v-model="form.email"
                    />
                    <div class="form__error" v-if="form.errors.email">
                        {{ form.errors.email }}
                    </div>
                </div>

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
                <!-- submit -->
                <div class="form__row">
                    <button class="form__btn" type="submit" :disabled="form.processing">
                        Зарегистрироваться
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
