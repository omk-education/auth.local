<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();

const user = computed(() => page.props.auth.user);
</script>

<template>
    <header class="header">
        <nav class="header__nav">
            <span class="header__text-logo"> Корок.Нет </span>

            <Link class="header__link" :href="route('home')"> Главная </Link>

            <Link v-if="!user" class="header__link" :href="route('login')">
                Вход
            </Link>

            <a v-if="user" class="header__link">
                {{ user.name }}
            </a>

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
