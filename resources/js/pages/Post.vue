<template>
  <div>
    <div v-if="error" class="not-found-container">
      <div class="not-found">
        <p class="text">404</p>
        <div class="bar"></div>
        <p class="text">Not Found</p>
      </div>
    </div>
    <div v-else>
      <div class="blog-nav">
        <div class="link pre">
          <transition name="link-fade">
            <div
              v-if="!loading && (!post || post.previous_id)"
              class="router-link"
            >
              {{ prev }}
              <router-link
                v-if="post && post.previous_id"
                class="router-link-a"
                :to="{ name: 'Post', params: { id: post.previous_id } }"
              ></router-link>
            </div>
          </transition>
        </div>
        <div class="link home">
          <router-link class="router-link" to="/blog">Blog</router-link>
        </div>
        <div class="link next">
          <transition name="link-fade">
            <div v-if="!loading && (!post || post.next_id)" class="router-link">
              {{ next }}
              <router-link
                v-if="post && post.next_id"
                class="router-link-a"
                :to="{ name: 'Post', params: { id: post.next_id } }"
              ></router-link>
            </div>
          </transition>
        </div>
      </div>
      <transition name="link-fade">
        <article v-if="post" class="article">
          <p class="date">{{ post.date }}</p>
          <h1 class="title">{{ post.title }}</h1>
          <div v-html="compiledMarkdown"></div>
        </article>
      </transition>
      <div v-if="post" class="blog-nav">
        <div class="link pre">
          <transition name="link-fade">
            <div
              v-if="!loading && (!post || post.previous_id)"
              class="router-link"
            >
              {{ prev }}
              <router-link
                v-if="post && post.previous_id"
                class="router-link-a"
                :to="{ name: 'Post', params: { id: post.previous_id } }"
              ></router-link>
            </div>
          </transition>
        </div>
        <div class="link top">
          <router-link class="router-link" to="/blog">Back to Top</router-link>
        </div>
        <div class="link next">
          <transition name="link-fade">
            <div v-if="!loading && (!post || post.next_id)" class="router-link">
              {{ next }}
              <router-link
                v-if="post && post.next_id"
                class="router-link-a"
                :to="{ name: 'Post', params: { id: post.next_id } }"
              ></router-link>
            </div>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import marked from "marked";
import Prism from "prismjs";
export default {
  data() {
    return {
      post: null,
      loading: true,
      prev: "< Prev",
      next: "Next >",
      error: false
    };
  },
  computed: {
    compiledMarkdown() {
      if (this.post.content != null) {
        return marked(this.post.content);
      } else {
        return "";
      }
    }
  },
  watch: {
    $route(to, from) {
      this.getPost();
    }
  },
  created() {
    this.getPost();
    const renderer = new marked.Renderer();
    renderer.link = (href, title, text) =>
      `<a target="_blank" href="${href}" title="${href}">${text}</a>`;
    new marked.setOptions({
      langPrefix: "language-",
      highlight: (code, lang) => {
        if (lang && lang.match(":")) {
          lang = lang.substring(0, lang.indexOf(":"));
        }
        if (lang in Prism.languages) {
          return Prism.highlight(code, Prism.languages[lang]);
        } else {
          return code;
        }
      },
      renderer: renderer
    });
  },
  mounted() {
    this.loading = false;
  },
  methods: {
    getPost() {
      this.post = null;
      this.$http
        .get("/api/posts/" + this.$route.params.id)
        .then(res => {
          this.post = res.data;
          document.title = res.data.title + " - Lotus Base";
          document
            .querySelector("meta[property='og:title']")
            .setAttribute("content", res.data.title);
          document
            .querySelector("meta[name='description']")
            .setAttribute("content", res.data.digest);
          document
            .querySelector("meta[property='og:description']")
            .setAttribute("content", res.data.digest);
        })
        .catch(error => {
          this.error = true;
        });
    }
  }
};
</script>
