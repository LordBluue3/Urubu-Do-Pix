import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/**/*.scss', 'resources/views/**/*.blade.php', 'resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
