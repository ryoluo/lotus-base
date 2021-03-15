import Vue from "vue";

import router from "./router";

import Eagle from "eagle.js";
Vue.use(Eagle);

import VueAnalytics from "vue-analytics";
Vue.use(VueAnalytics, {
  id: "UA-142986852-1",
  router
});

import App from "./App.vue";

import "prismjs/components/prism-sql";
import "prismjs/components/prism-python";
import "prismjs/components/prism-go";
import "prismjs/components/prism-bash";
import "prismjs/components/prism-markup-templating";
import "prismjs/components/prism-php";
import "prismjs/components/prism-json";
import "prismjs/components/prism-css";
import "prismjs/components/prism-sass";
import "prismjs/components/prism-scss";

import axios from "axios";
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
  axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
} else {
  console.error("CSRF token not found.");
}

Vue.prototype.$http = axios;

new Vue({
  el: "#app",
  router,
  components: { App },
  template: "<App />"
});
