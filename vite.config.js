import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            // Меняем расширение app и ssr с ts на js.
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    // Добавляем подгрузку SASS/SCSS хелперов во все компоненты Vue.
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@use "/resources/scss/helpers.scss" as *;',
            },
        },
    },
    // Разрешаем CORS (Cross-Origin Resource Sharing, совместное использование ресурсов между разными источниками).
    // Снимаем ограничение политики одного источника (Same-Origin Policy).
    // Это может понадобиться для загрузки скриптов и стилей во время разработки
    // (Vite запускает локальный сервер с другим адресом, нежели у приложения Laravel).
    server: {
        cors: true,
    },
});