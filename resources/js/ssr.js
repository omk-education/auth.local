import { createInertiaApp } from '@inertiajs/vue3';
import createServer from '@inertiajs/vue3/server';
import { renderToString } from '@vue/server-renderer';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createSSRApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Название приложения.
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Создание сервера для серверного рендеринга.
createServer((page) =>
    // Создание приложения Inertia.
    createInertiaApp({
        page,
        render: renderToString,
        // Заголовок документа.
        title: (title) => `${title} - ${appName}`,
        resolve: (name) =>
            // Подключение страниц - resources/js/pages, файлы с расширением .vue.
            resolvePageComponent(
                `./pages/${name}.vue`,
                import.meta.glob('./pages/**/*.vue'),
            ),
        // Создание приложения Vue для серверного рендеринга.
        setup({ App, props, plugin }) {
            return createSSRApp({ render: () => h(App, props) })
                .use(plugin)
                .use(ZiggyVue, {
                    ...page.props.ziggy,
                    location: new URL(page.props.ziggy.location),
                });
        },
    }),
);