import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from "glob";

/**
 * @param match
 * Regular expression in string or Regexp type,
 *  or a match predicate  (this: vite transform context, code: string, id: file name string) => void
 * @returns transformed code
 */

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                ...glob.globSync('resources/js/*/*.js'),
                ...glob.globSync('resources/js/*/*/*.js'),
                ...glob.globSync('resources/js/*/*/*/*.js'),
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
});
