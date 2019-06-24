<template>
  <div>
    <h1 class="page-title">Blog</h1>
    <ul class="posts-wrapper">
      <li v-for="post in posts" :key="post.id" class="post-item">
        <router-link class="router-link-img" :to="{ name: 'Post', params: { id: post.id } }">
          <img class="post-img" :src="[ post.path !== null ? post.path : '/storage/img/logo-sumbnail-gradation.png']" alt>
        </router-link>
        <router-link :to="{ name: 'Post', params: { id: post.id } }" class="text">
          <p class="date">{{ post.date }}<span class="category-name">{{ post.category.name }}</span></p>
          <h2 class="title">{{ post.title }}</h2>
        </router-link>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    document.addEventListener('touchstart', function() {}, {passive: true});
    axios
      .get("/api/posts/index")
      .then(response => (this.posts = response.data));
  }
};
</script>
