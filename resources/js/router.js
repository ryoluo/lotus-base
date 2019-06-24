import Vue from "vue";
import VueRouter from "vue-router";

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Blog from "./pages/Blog.vue";
import Contact from "./pages/Contact.vue";
import Works from "./pages/Works.vue";
import Post from "./pages/Post.vue";
import NotFound from "./pages/NotFound.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: Home
    },
    {
        path: "/about",
        component: About,
        meta: {
            title: "About"
        }
    },
    {
        path: "/blog",
        component: Blog,
        meta: {
            title: "Blog"
        }
    },
    {
        path: "/Works",
        component: Works,
        meta: {
            title: "Works"
        }
    },
    {
        path: "/Contact",
        component: Contact,
        meta: {
            title: "Contact"
        }
    },
    {
        path: "/blog/:id",
        name: "Post",
        component: Post
    },
    {
        path: "*",
        component: NotFound
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
