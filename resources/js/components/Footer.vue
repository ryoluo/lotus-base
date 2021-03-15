<template>
  <footer class="footer">
    <p class="copyright">© 2019-{{ curYear }} Ryo Kobayashi</p>
  </footer>
</template>
<script>
export default {
  computed: {
    curYear() {
      const date = new Date();
      return date.getFullYear();
    }
  }
};
</script>
