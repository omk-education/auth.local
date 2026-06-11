<template>
    <footer class="footer">
        <div class="footer__copyright">
            &copy; Все права защищены, {{ new Date().getFullYear() }}.
        </div>
    </footer>
</template>

<style lang="scss">
.footer {
    display: grid;
    place-items: center;
    padding: 10px;
    &__copyright {
        //
    }
}
</style>
