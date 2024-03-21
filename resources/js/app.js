import './bootstrap';
import { createApp } from "vue/dist/vue.esm-bundler.js";
import App from "./components/App.vue"; // Değişiklik burada

const app = createApp({
    components: {
        App
    },
    template: '<App/>' // Değişiklik burada
});

app.mount('#app');
window.axios = require('axios');
