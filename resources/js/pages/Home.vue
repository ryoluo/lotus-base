<template>
  <div id="home" class="en">
    <div class="lang-wrapper">
      <div class="lang" @click="toggleLang">
        <p class="text">{{ text["lang"][lang] }}</p>
      </div>
    </div>
    <div class="catch-copy-wrapper">
      <h2 class="catch-copy">{{ text["music"][lang] }}</h2>
      <h2 class="catch-copy">{{ text["vietnam"][lang] }}</h2>
      <h2 class="catch-copy">{{ text["technology"][lang] }}</h2>
      <h2 class="catch-copy last">{{ text["and"][lang] }}</h2>
    </div>
    <div class="intro">
      <div class="flex-wrapper">
        <div class="border"></div>
        <h3 class="header3">{{ text["greeting"][lang] }}</h3>
      </div>
      <h4 class="header">{{ text["student"][lang] }}</h4>
      <h4 class="header">{{ text["work"][lang] }}</h4>
      <h4 class="header last">{{ text["website"][lang] }}</h4>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      lang: "en",
      text: {
        lang: {
          en: "Tiếng Việt",
          vn: "Enligsh"
        },
        music: {
          en: "Music,",
          vn: "Âm nhạc,"
        },
        vietnam: {
          en: "Vietnam,",
          vn: "Việt Nam,"
        },
        technology: {
          en: "Technology,",
          vn: "Kỹ thuật,"
        },
        and: {
          en: "and Many Good Things.",
          vn: "Và những điều tốt đẹp."
        },
        greeting: {
          en: "Hi! I'm Ryo Kobayashi.",
          vn: "Xin chào! Tôi là Ryo Kobayashi."
        },
        student: {
          en:
            "I'm a Japanese university student studying at Yokohama National University.",
          vn: "Tôi là sinh viên của Trường đại học quốc lập Yokohama."
        },
        work: {
          en:
            "Currently I'm working as a web-application engineer at Tokyo, Japan.",
          vn:
            "Bây giờ tôi làm kỹ sư phần mềm ở một công ty tại Tokyo, Nhật Bản."
        },
        website: {
          en:
            "Here is my official website, discover more from menu button above!",
          vn:
            "Đây là trang web chính thức của tôi, hãy xem thêm từ nút menu bên trên!"
        }
      }
    };
  },
  methods: {
    toggleLang() {
      const $home = document.getElementById("home");
      $home.classList.toggle("vn");
      $home.classList.toggle("en");
      if (this.lang == "en") {
        this.lang = "vn";
      } else {
        this.lang = "en";
      }
    }
  }
};
</script>
