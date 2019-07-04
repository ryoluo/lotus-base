/* eslint-disable no-undef */
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require("./bootstrap");

import Vue from "vue";

// Vue-Router
import router from "./router";
import App from "./App.vue";

// Eagle.js
import Eagle from "eagle.js";
Vue.use(Eagle);

// vue-analytics
import VueAnalytics from "vue-analytics";

Vue.use(VueAnalytics, {
  id: "UA-142986852-1",
  router
});

window.Hammer = require("./hammer");
window.marked = require("marked");
window.Prism = require("./prism");

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
Vue.prototype.$http = axios;

new Vue({
  el: "#app",
  router,
  components: { App },
  template: "<App />"
});
