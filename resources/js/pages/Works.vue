<template>
  <div id="works">
    <h1 class="page-title">Works / Experiences</h1>
    <div class="item">
      <a class="sp name" href="/open/en2web" target="_blank">
        En2::Web
        <i class="fas fa-external-link-alt"></i>
      </a>
      <p class="sp frameworks">Laravel / Vue.js</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouse-navigation="false"
        :keyboard-navigation="false"
        name="en2web"
        :num="6"
      />
      <div class="text">
        <a class="pc name" href="/open/en2web" target="_blank">
          En2::Web
          <i class="fas fa-external-link-alt"></i>
        </a>
        <p class="pc frameworks">Laravel / Vue.js</p>
        <p>
          学生団体メンバー専用のWebグループウェアです。設計〜デザイン〜コーディング〜運用を一貫して個人で行っています。
        </p>
        <p>
          ノートによる情報共有機能やプロフィール機能をはじめ、LINE Messaging
          APIを利用したLINEへの自動通知機能なども組み込んでいます。
        </p>
        <p>個人として初めて本格的に製作したWebアプリでもあります。</p>
      </div>
    </div>
    <hr />
    <div class="item">
      <a href="/open/gsskt" class="sp name jp" target="_blank">
        Howtelevision, inc.
        <i class="fas fa-external-link-alt"></i>
      </a>
      <p class="sp frameworks">CakePHP / React / Go</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouse-navigation="false"
        :keyboard-navigation="false"
        name="gsskt"
        :num="3"
      />
      <div class="text">
        <a href="/open/gsskt" class="pc name jp" target="_blank">
          Howtelevision, inc.
          <i class="fas fa-external-link-alt"></i>
        </a>
        <p class="pc frameworks">CakePHP / React / Go</p>
        <p>
          2019年2月から2020年8月の1年半、ITエンジニアインターンとしてお世話になっていました。
        </p>
        <p>
          ユーザー向け新機能の開発、内部向けツールの開発・保守運用、データ集計・分析、APIエンドポイントの設計・実装など、多岐に渡る業務に携わらせていただきました。
        </p>
        <p>
          内部向けツール開発ではCRMシステムの内製化、各種事務処理のシステム化等を設計から実装・テストまで一貫して行っていました。
        </p>
      </div>
    </div>
    <!-- <hr />
    <div class="item">
      <p class="sp name">In Development...</p>
      <p class="sp frameworks">Vue.js / UI Design</p>
      <Slideshow
        class="slideshow"
        :embedded="true"
        :mouse-navigation="false"
        name="comingsoon"
        :num="1"
      />
      <div class="text">
        <a class="pc name">In Development...</a>
        <p class="pc frameworks">Vue.js / UI Design</p>
        <p>2019年6月より業務委託で新規Webサービスの開発を行っています。</p>
        <p>サービス公開可能になり次第更新します。</p>
      </div>
    </div> -->
  </div>
</template>
<script>
import Slideshow from "../components/Slideshow";
export default {
  components: { Slideshow }
};
</script>
