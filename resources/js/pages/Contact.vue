<template>
  <div>
    <transition name="fade" type="out-in">
      <div class="modal-wrapper" v-show="displayModal">
        <div class="modal">
          <h3 class="modal-title">Confirm</h3>
          <p>メッセージを送信します。</p>
          <p>入力されたメールアドレスが正しいことをご確認ください。</p>
          <p class="email">{{ email }}</p>
          <div class="btn-wrapper">
            <button class="btn-primary" @click="sendMessage" v-bind:disabled="sending">
              <p class="btn-text" v-if="sending">Sending...</p>
              <p class="btn-text" v-else>Send</p>
            </button>
            <button class="btn-secondary" @click="hideModal" v-bind:disabled="sending">
              <p class="btn-text">Cancel</p>
            </button>
          </div>
        </div>
      </div>
    </transition>
    <transition name="fade" type="out-in">
      <div class="toast" v-if="displayToast" v-bind:class="{'toast-error': isErrorToast}">
        <p class="toast-message">
          {{ toastMessage1 }}
          <br>
          {{ toastMessage2 }}
        </p>
      </div>
    </transition>
    <h1 class="page-title" @click="toastSuccess">Contact</h1>
    <div class="form">
      <form @submit.prevent @submit="confirm()">
        <p class="prop">Name</p>
        <input type="text" v-model="name" id="name" required>
        <p class="prop">Email</p>
        <input type="email" v-model="email" id="email" required>
        <p class="prop">Content</p>
        <textarea v-model="content" id="content" rows="10" required></textarea>
        <button class="submit btn-primary" type="submit">
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
      name: "小林　涼",
      email: "kobayasi-ryo-ck@ynu.jp",
      content: "これはテストです。",
      displayModal: false,
      sending: false,
      displayToast: false,
      toastMessage1: "",
      toastMessage2: "",
      isErrorToast: false
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
    confirm() {
      this.displayModal = true;
    },
    hideModal() {
      this.displayModal = false;
    },
    sendMessage() {
      this.sending = true;
      axios
        .post("/api/contact/submit", this.params)
        .then(response => {
          this.hideModal();
          setTimeout(this.makeSendingFalse, 500);
          this.toastSuccess();
          this.name = "";
          this.email = "";
          this.content = "";
        })
        .catch(error => {
          this.hideModal();
          setTimeout(this.makeSendingFalse, 500);
          this.toastError();
        });
    },
    toastSuccess() {
      this.toastMessage1 = "お問い合わせありがとうございます。";
      this.toastMessage2 = "メッセージを送信しました。";
      this.isErrorToast = false;
      this.displayToast = true;
      setTimeout(this.hideToast, 2000);
    },
    toastError() {
      this.toastMessage1 = "エラーが発生しました。";
      this.toastMessage2 = "メッセージの送信に失敗しました。";
      this.isErrorToast = true;
      this.displayToast = true;
      setTimeout(this.hideToast, 2000);
    },
    hideToast() {
      this.displayToast = false;
    },
    makeSendingFalse() {
      this.sending = false;
    }
  }
};
</script>
