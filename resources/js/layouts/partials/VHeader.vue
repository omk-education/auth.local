<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const user = computed(() => page.props.auth.user);
const isAdmin = computed(() => page.props.auth.user?.role === 'admin');
const isUser = computed(() => page.props.auth.user?.role === 'user');
</script>

<template>
    <header class="header">
        <nav class="header__nav">
            <span class="header__text-logo"> Корок.Нет </span>

            <Link class="header__link" :href="route('home')"> Главная </Link>

            <Link v-if="!user" class="header__link" :href="route('login')">
                Вход
            </Link>

            <Link v-if="isAdmin" class="header__link" :href="route('admin')">
                Панель администратора
            </Link>

            <Link
                v-if="!user"
                class="header__link"
                :href="route('register.create')"
            >
                Регистрация
            </Link>

            <Link
                v-if="user"
                method="post"
                as="button"
                class="header__link"
                :href="route('logout')"
            >
                Выход
            </Link>
        </nav>
    </header>
</template>

<style lang="scss">
.header {
    padding: 20px;
    display: grid;
    gap: 10px;
    place-items: center;
    place-content: center;

    &__nav {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        place-items: center;
    }

    &__text-logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    &__link {
        @include btn;
    }
}
</style>
