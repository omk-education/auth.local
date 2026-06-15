<script setup>
import Layout from '@/layouts/Layout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const id = computed(() => page.props.auth.user.id);

const form = useForm({
    name: null,
    date: null,
    pay: null,
    user_id: id.value,
});
</script>

<template>
    <Head title="Создать заявку"></Head>

    <Layout>
        <div class="home">
            <h1 class="home__title">Создать заявку</h1>
            <form
                class="form"
                @submit.prevent="form.post(route('applications.store'))"
            >
                <!-- name -->
                <div class="form__row">
                    <label class="form__label" for="name">Название курса</label>

                    <select
                        class="form__input"
                        name="name"
                        id="name"
                        v-model="form.name"
                    >
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

                <!-- date -->
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
                    <label class="form__label" for="pay">Способ оплаты</label>

                    <select
                        class="form__input"
                        name="pay"
                        id="pay"
                        v-model="form.pay"
                    >
                        <option>Наличными</option>
                        <option>По номеру телефона</option>
                    </select>

                    <div class="form__error" v-if="form.errors.pay">
                        {{ form.errors.pay }}
                    </div>
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
