import { defineConfig, loadEnv } from "vite";
import vue from '@vitejs/plugin-vue'
import liveReload from 'vite-plugin-live-reload';
import dotenv from 'dotenv';
import fs from 'fs';

// https://vitejs.dev/config/
export default ({ mode }) => {
    Object.assign(process.env, dotenv.parse(fs.readFileSync(`${__dirname}/.env`)));
    const port = process.env.VITE_DEV_PORT;

    return defineConfig({
        plugins: [
            vue(),
            liveReload([
                __dirname + '/templates/**/*.php',
            ]),
        ],

        build: {
            manifest: "manifest.json",
            outDir: 'web/resources/',
            rollupOptions: {
                input: {
                    js: './resources/js/app.js',
                    css: './resources/scss/app.scss',
                },
                output: {
                    entryFileNames: `js/app.js`,
                    assetFileNames: `[ext]/app.[ext]`
                },
            },
        },

        server: {
            strictPort: true,
            port: process.env.VITE_DEV_PORT,
            hmr: {
                host: 'localhost',
            },
        },
        resolve: {
            alias: {
                vue: 'vue/dist/vue.esm-bundler.js'
            }
        }
    })
}