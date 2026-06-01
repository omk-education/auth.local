<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="header">
        <nav class="header__nav">
            <span class="header__text-logo">
                Название приложения
            </span>

            <Link class="header__link"
                :href="route('home')">
                Главная
            </Link>
        </nav>
    </header>
</template>

<style lang="scss">
.header {
    &__nav {
        //
    }

    &__text-logo {
        //
    }

    &__link {
        //
    }
}
</style>