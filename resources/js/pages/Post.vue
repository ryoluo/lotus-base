<template>
  <div>
    <div class="blog-nav">
      <div class="link pre">
        <transition name="link-fade">
          <div class="router-link" v-if="!loading && (!post || post.previous_id)">
            {{ prev }}
            <router-link
              class="router-link-a"
              v-if="post && post.previous_id"
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
          <div class="router-link" v-if="!loading && (!post || post.next_id)">
            {{ next }}
            <router-link
              class="router-link-a"
              v-if="post && post.next_id"
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
    <div class="loader" v-if="!post"></div>
    <div class="blog-nav">
      <div class="link pre">
        <transition name="link-fade">
          <div class="router-link" v-if="!loading && (!post || post.previous_id)">
            {{ prev }}
            <router-link
              class="router-link-a"
              v-if="post && post.previous_id"
              :to="{ name: 'Post', params: { id: post.previous_id } }"
            ></router-link>
          </div>
        </transition>
      </div>
      <div class="link top">
          <router-link class="router-link" to="/blog">Blog</router-link>
      </div>
      <div class="link next">
        <transition name="link-fade">
          <div class="router-link" v-if="!loading && (!post || post.next_id)">
            {{ next }}
            <router-link
              class="router-link-a"
              v-if="post && post.next_id"
              :to="{ name: 'Post', params: { id: post.next_id } }"
            ></router-link>
          </div>
        </transition>
      </div>
    </div>
  </div>
</template>
<script>
import marked from "marked";
export default {
  data() {
    return {
      post: null,
      loading: true,
      prev: "< Prev",
      next: "Next >"
    };
  },
  created() {
    this.getPost();
    marked.setOptions({
      langPrefix: "language-",
      highlight: function(code, lang) {
        if (lang && lang.match(":")) {
          lang = lang.substring(0, lang.indexOf(":"));
        }
        if (lang in Prism.languages) {
          return Prism.highlight(code, Prism.languages[lang]);
        } else {
          return code;
        }
      }
    });
  },
  mounted() {
    this.loading = false;
  },
  watch: {
    $route(to, from) {
      this.getPost();
    }
  },
  methods: {
    getPost() {
      this.post = null;
      axios.get("/api/posts/" + this.$route.params.id).then(res => {
        this.post = res.data;
        document.title = res.data.title + " - Lotus Base"
      });
    },
  },
  computed: {
    compiledMarkdown() {
      if (this.post.content != null) {
        return marked(this.post.content);
      } else {
        return '';
      }
    }
  }
};
</script>
