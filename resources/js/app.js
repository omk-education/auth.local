// Подключение главного SCSS-файла приложения.
import '../scss/app.scss';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Название приложения.
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Создание приложения Inertia.
createInertiaApp({
    // Заголовок документа.
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        // Подключение страниц - resources/js/pages, файлы с расширением .vue.
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob('./pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        // Создание экземпляра приложения Vue.
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            // Использование плагина ziggy для роутинга.
            .use(ZiggyVue)
            // Монтирование экземпляра приложения.
            .mount(el);
    },
    // Настройка прогресс-бара, который будет активироваться автоматически во время перехода между страницами.
    progress: {
        // Цвет в любом удобном формате: RGBA, RGB, Hex и пр.
        color: 'rgb(73, 140, 240)',
        // Нужно ли оформление по умолчанию.
        includeCSS: true,
        // Нужно ли показывать спиннер.
        showSpinner: true,
    },
});