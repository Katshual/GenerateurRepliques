import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue(), // Ajoutez le plugin Vue ici
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js", // Utilisez cette version de Vue pour compiler les templates
        },
    },
});
