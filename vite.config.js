import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'node_modules/bootstrap/dist/css/bootstrap.css',
            ],
            refresh: true,
        }),
    ],
});
