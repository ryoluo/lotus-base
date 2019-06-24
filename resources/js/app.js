/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require("./bootstrap");

window.Vue = require("vue");
window.Hammer = require("./hammer");

var marked = require("marked");
var Prism = require("./prism");

// Vue-Router
import router from "./router";
import App from "./App.vue";

// Eagle.js
import Eagle from "eagle.js";
Vue.use(Eagle);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// Vue.prototype.$http = axios;

const app = new Vue({
    el: "#app",
    router,
    // store,
    components: { App },
    template: "<App />",
    methods: {
        setMeta: function(to) {
            if (to.meta.title) {
                let title = to.meta.title + " - Lotus Base";
                document.title = title;
                document
                    .querySelector("meta[property='og:title']")
                    .setAttribute("content", to.meta.title);
            } else {
                let title = "LotusBase";
                document.title = title;
                document
                    .querySelector("meta[property='og:title']")
                    .setAttribute("content", title);
            }
            let og_url = "https://lotus-base.com" + to.path;
            document
                .querySelector("meta[property='og:url']")
                .setAttribute("content", og_url);
        }
    },
    mounted: function() {
        this.setMeta(this.$route);
    },
    watch: {
        $route(to, from) {
            this.setMeta(to);
        }
    }
});
