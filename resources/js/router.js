import Vue from "vue";
import VueRouter from "vue-router";

import List from "./pages/List.vue";
import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Blog from "./pages/Blog.vue";
import Contact from "./pages/Contact.vue";
import Works from "./pages/Works.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/list",
        component: List
    },
    {
        path: "/",
        component: Home
    },
    {
        path: "/about",
        component: About
    },
    {
        path: "/blog",
        component: Blog
    },
    {
        path: "/Works",
        component: Works
    },
    {
        path: "/Contact",
        component: Contact
    }
];

const router = new VueRouter({
    mode: "history",
    routes,
    scrollBehavior() {
        return { x: 0, y: 0 };
    }
});

export default router;
