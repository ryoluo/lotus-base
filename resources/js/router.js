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
const setMeta = function(to) {
  if (to.meta.title) {
    let title = to.meta.title + " - Lotus Base";
    document.title = title;
    document
      .querySelector("meta[property='og:title']")
      .setAttribute("content", title);
  } else {
    let title = "Lotus Base";
    document.title = title;
    document
      .querySelector("meta[property='og:title']")
      .setAttribute("content", title);
  }
  if (!to.path.match(/\/blog\/[0-9]+/)) {
    let desc =
      "Here is Ryo Kobayashi official website! I am a university student and currently working as a web engineer.";
    document
      .querySelector("meta[name='description']")
      .setAttribute("content", desc);
    document
      .querySelector("meta[property='og:description']")
      .setAttribute("content", desc);
  }
  let og_url = "https://lotus-base.com" + to.path;
  document
    .querySelector("meta[property='og:url']")
    .setAttribute("content", og_url);
};
const router = new VueRouter({
  mode: "history",
  routes,
  scrollBehavior() {
    return { x: 0, y: 0 };
  }
});

router.afterEach((to, from) => {
  setMeta(to);
});

export default router;
