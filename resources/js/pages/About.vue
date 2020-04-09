<template>
  <div id="about">
    <h1 class="page-title">About</h1>
    <div class="upper">
      <div class="photo-and-name">
        <div class="img-wrapper">
          <img class="myphoto" src="/img/myphoto.jpg" alt="myphoto" />
        </div>
        <div class="name">
          <h3 class="name-en">Kobayashi Ryo</h3>
          <h2 class="name-jp">小林&ensp;涼</h2>
        </div>
      </div>
      <div class="message">
        <p class="message-top">
          ご訪問ありがとうございます。小林涼と申します。
        </p>
        <p>
          大学時代にプログラミングを始め、現在ITエンジニアとしてはしゃぐように活動中です。
        </p>
        <p>
          Webアプリ開発をはじめ、ブログ・HP制作、各種APIを利用したツールの作成等、様々な仕事を幅広く承っています。
        </p>
        <p class="message-bottom">
          お仕事の依頼は
          <router-link to="/contact">Contact</router-link>&nbsp;もしくは
          <a href="/open/twitter" target="_blank">Twitter</a>
          からお願いいたします。小さな案件でもお気軽にご相談ください！
        </p>
      </div>
    </div>
    <div class="introduction">
      <ul class="ul">
        <li class="li">
          <h4 class="title">Languages</h4>
          <p class="detail">
            JavaScript / PHP / Go / Python
            <br />ベトナム語 / 英語
          </p>
        </li>
        <li class="li">
          <h4 class="title">Frameworks</h4>
          <p class="detail">Laravel / CakePHP / Vue.js / React</p>
        </li>
        <li class="li">
          <h4 class="title">Likes</h4>
          <p class="detail">踊れる音楽 / ベトナム / プログラミング</p>
        </li>
        <li class="li">
          <h4 class="title">Music</h4>
          <p class="detail">
            House / DnB / Disco / Hiphop / K-pop, V-pop
            <br />Monstercat / Barong Family
          </p>
        </li>
        <li class="li">
          <h4 class="title">Experiences</h4>
          <dl class="dl">
            <dt class="dt">2015.04</dt>
            <dd class="dd">横浜国立大学経済学部 入学</dd>
            <dt class="dt">2017.07 - 2018.07</dt>
            <dd class="dd">ベトナム・ハノイ貿易大学 交換留学</dd>
            <dt class="dt">2019.02 - Now</dt>
            <dd class="dd">
              Webエンジニアインターン
              <br />@Howtelevision, Inc.
            </dd>
            <dt class="dt">2019.06 - 2020.03</dt>
            <dd class="dd">
              ベトナム語による事務業務補助
              <br />@Ueda Trading Co., Ltd.
            </dd>
            <dt class="dt">2020.03</dt>
            <dd class="dd">横浜国立大学経済学部 卒業</dd>
          </dl>
        </li>
        <dl class="li">
          <h4 class="title">Upcoming</h4>
          <dl class="dl">
            <dt class="dt">2020.08</dt>
            <dd class="dd">
              外資系企業に入社予定
              <br />コンサルタントとしてシステム開発等に携わる見込みです
            </dd>
          </dl>
        </dl>
      </ul>
    </div>
  </div>
</template>
<script>
export default {};
</script>
