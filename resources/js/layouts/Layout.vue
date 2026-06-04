<script setup>
import VFooter from './partials/VFooter.vue';
import VHeader from './partials/VHeader.vue';
</script>

<template>
    <div class="app">
        <VHeader class="app__header"></VHeader>
        <main class="app__main">
            <!-- Неименованный слот для передачи HTML-кода в макет. -->
            <slot></slot>
        </main>
        <VFooter class="app__footer"></VFooter>
    </div>
</template>

<style lang="scss">
// Универсальный селектор (обнуление).
*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    border: none;
}

.app {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    font-size: 1rem;
    // Базовая разметка документа.
    display: grid;
    grid-template-rows:
        max-content
        1fr
        max-content;
    grid-template-areas:
        'header'
        'main'
        'footer';

    // Базовые цвета документа.
    color: $secondary;
    background-color: $primary;

    &__header {
        grid-area: header;
    }

    &__main {
        grid-area: main;
        display: grid;
        min-height: 100vh;
    }

    &__footer {
        grid-area: footer;
    }
}
</style>
