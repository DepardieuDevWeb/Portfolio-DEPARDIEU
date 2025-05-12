import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import copy from "rollup-plugin-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        // copy({
        //     targets: [
        //         {
        //             src: "node_modules/tinymce/skins",
        //             dest: "public/build/tinymce",
        //         },
        //     ],
        //     hook: "writeBundle",
        // }),
    ],
    build: {
        manifest: true,
        outDir: "public/build",
        rollupOptions: {
            input: "resources/js/app.js",
        },
    },
    server: {
        host: true,
    },
});
