<template>
  <div id="home" :class="lang">
    <div class="lang-wrapper">
      <div class="lang" @click="toggleLang">
        <p class="text">{{ text["lang"][lang] }}</p>
      </div>
    </div>
    <div class="flex">
      <div class="section">
        <div class="catch-copy-wrapper">
          <h2 class="catch-copy">{{ text["music"][lang] }}</h2>
          <h2 class="catch-copy">{{ text["vietnam"][lang] }}</h2>
          <h2 class="catch-copy">{{ text["technology"][lang] }}</h2>
          <h2 class="catch-copy last">{{ text["and"][lang] }}</h2>
        </div>
      </div>
      <div class="section">
        <div class="intro">
          <div class="flex-wrapper">
            <div class="border"></div>
            <h3 class="header3">{{ text["greeting"][lang] }}</h3>
          </div>
          <h4 class="header">{{ text["work"][lang] }}</h4>
          <h4 class="header last">{{ text["website"][lang] }}</h4>
        </div>
      </div>
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
        work: {
          en: "I'm a web-application engineer working at Tokyo, Japan.",
          vn: "Tôi là kỹ sư phần mềm ở Tokyo, Nhật Bản."
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
      if (this.lang == "en") {
        this.lang = "vn";
      } else {
        this.lang = "en";
      }
    }
  }
};
</script>
