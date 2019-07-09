<template>
  <div>
    <main>
      <Header />
      <transition name="view-fade" mode="out-in">
        <RouterView class="view" />
      </transition>
      <Footer />
    </main>
  </div>
</template>

<script>
import Header from "./components/Header";
import Footer from "./components/Footer";
export default {
  name: "App",
  components: {
    Header,
    Footer
  }
};
</script>
