<template>
  <div>
    <h1 class="page-title">Contact</h1>
    <div class="form">
      <form action="#" @submit.prevent @submit="confirm()">
        <p class="prop">Name</p>
        <input type="text" v-model="name" id="name" required>
        <p class="prop">Email</p>
        <input type="email" v-model="email" id="email" required>
        <p class="prop">Content</p>
        <textarea v-model="content" id="content" rows="10" required></textarea>
        <button class="submit" type="submit">
          <p class="btn-text">Submit</p>
        </button>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      name: "test",
      email: "test@test.com",
      content: "ryoryo",
    };
  },
  computed: {
    params() {
      return {
        name: this.name,
        email: this.email,
        content: this.content
      };
    }
  },
  methods: {
    submit() {
      axios
        .post("/api/test", this.params)
        .then(function() {
          console.log("ok");
        })
        .catch(function() {
          console.log("notok");
        });
    },
    confirm() {
      this.toggleShowModal()
    },
    toggleShowModal() {
      store.commit('modal/toggleShow');
      console.log(store.state.modal.showModal);
    },
  }
};
</script>
