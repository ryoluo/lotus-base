<template>
  <div id="works">
    <h1 class="page-title">Works</h1>
    <div class="item">
      <a class="sp name" href="/open/en2web" target="_blank">
        En2::Web
        <i class="fas fa-external-link-alt"></i>
      </a>
      <p class="sp frameworks">Laravel / Vue.js</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouseNavigation="false"
        :keyboardNavigation="false"
        name="en2web"
        :num="6"
      />
      <div class="text">
        <a class="pc name" href="/open/en2web" target="_blank">
          En2::Web
          <i class="fas fa-external-link-alt"></i>
        </a>
        <p class="pc frameworks">Laravel / Vue.js</p>
        <p>学生団体メンバー専用のWebグループウェアです。設計〜デザイン〜コーディング〜運用を一貫して個人で行っています。</p>
        <p>ノートによる情報共有機能やプロフィール機能をはじめ、LINE Messaging APIを利用したLINEへの自動通知機能なども組み込んでいます。</p>
        <p>個人として初めて本格的に製作したWebアプリでもあります。</p>
      </div>
    </div>
    <hr />
    <div class="item">
      <a href="/open/gsskt" class="sp name jp" target="_blank">
        外資就活ドットコム
        <i class="fas fa-external-link-alt"></i>
      </a>
      <p class="sp frameworks">CakePHP / React / Go</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouseNavigation="false"
        :keyboardNavigation="false"
        name="gsskt"
        :num="3"
      />
      <div class="text">
        <a href="/open/gsskt" class="pc name jp" target="_blank">
          外資就活ドットコム
          <i class="fas fa-external-link-alt"></i>
        </a>
        <p class="pc frameworks">CakePHP / React / Go</p>
        <p>2019年2月より長期インターン（Webエンジニア）としてお世話になっています。</p>
        <p>新機能の開発や既存システムの保守運用、データ集計・分析、グロースハックなど幅広い業務に取り組んでいます。</p>
        <p>なお自身は就活を適当にしか行っていないため、就活についてはよく分かりません…(爆)</p>
        <p>まわりのインターン生は上位校出身で就活無双している方が多いのですごいです。</p>
      </div>
    </div>
    <hr />
    <div class="item">
      <p class="sp name">In Development...</p>
      <p class="sp frameworks">Vue.js / UI Design</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouseNavigation="false"
        name="comingsoon"
        :num="1"
      />
      <div class="text">
        <a class="pc name">In Development...</a>
        <p class="pc frameworks">Vue.js / UI Design</p>
        <p>2019年6月より業務委託で新規Webサービスの開発を行っています。</p>
        <p>サービス公開可能になり次第更新します。</p>
      </div>
    </div>
  </div>
</template>
<script>
import Slideshow from "../components/Slideshow";
export default {
  components: { Slideshow }
};
</script>
