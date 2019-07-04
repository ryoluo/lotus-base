<template>
  <div class="header-component">
    <transition name="fade">
      <nav v-show="showNav" class="nav">
        <ul class="links">
          <li class="link" @click="hideNav">
            <router-link to="/about" class="text">About</router-link>
          </li>
          <li class="link" @click="hideNav">
            <router-link to="/blog" class="text">Blog</router-link>
          </li>
          <li class="link" @click="hideNav">
            <router-link to="/works" class="text">Works</router-link>
          </li>
          <li class="link" @click="hideNav">
            <router-link to="/contact" class="text">Contact</router-link>
          </li>
        </ul>
        <ul class="icons">
          <li class="icon">
            <a class="link" href="/open/twitter" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="icon">
            <a class="link" href="/open/instagram" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="icon">
            <a class="link" href="/open/github" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
        </ul>
      </nav>
    </transition>
    <header>
      <div class="header-content">
        <router-link to="/">
          <div class="logo-container" @click="hideNav">
            <img class="logo-img" src="/img/icon/lotus-logo.svg" alt />
            <p class="logo-text">Lotus Base</p>
          </div>
        </router-link>
        <div class="tap-area" :class="{ showNav: showNav }" @click="toggleNav">
          <div :class="{ showNav: showNav }" class="h-btn">
            <div class="bar bar-top"></div>
            <div class="bar bar-middle"></div>
            <div class="bar bar-bottom"></div>
          </div>
        </div>
      </div>
    </header>
  </div>
</template>
<script>
export default {
  data() {
    return {
      showNav: false
    };
  },
  mounted() {
    this.showNav = false;
  },
  methods: {
    toggleNav() {
      this.showNav = !this.showNav;
      document.body.classList.toggle("showNav");
    },
    hideNav() {
      this.showNav = false;
      document.body.classList.remove("showNav");
    }
  }
};
</script>
