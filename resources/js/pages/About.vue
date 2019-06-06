<template>
  <div id="about">
    <h1 class="page-title">About</h1>
    <div class="photo-and-name">
      <div class="img-wrapper">
        <img class="myphoto" src="/images/myphoto.jpeg" alt="myphoto">
      </div>
      <div class="name">
        <h3 class="name-en">Ryo Kobayashi</h3>
        <h2 class="name-jp">小林&ensp;涼</h2>
      </div>
    </div>
    <div class="introduction">
      <div class="message">
        <p class="message-top">写真のおしゃぶりしてる方が僕です。嘘です。</p>
        <p>ご訪問ありがとうございます。横浜国立大学４年（５年目）の小林涼と申します。</p>
        <p>2018年夏ごろからプログラミングを始め、現在Webエンジニアとしてはしゃぐように活動中です。ベトナムへの留学経験を活かしたベトナム語に関わる事務業務も承っております。</p>
        <p class="message-bottom">
          お仕事の依頼は
          <router-link to="/contact">Contact</router-link>&nbsp;もしくは
          <a href="#" target="_blank">Twitter</a> からお願いいたします。
        </p>
      </div>
      <div class="list">
        <div class="flex-wrapper">
          <div class="border"></div>
          <h4 class="title">Likes</h4>
        </div>
        <p class="detail">踊れる音楽 / ベトナム / プログラミング</p>
        <div class="flex-wrapper">
          <div class="border"></div>
          <h4 class="title">Languages</h4>
        </div>
        <p class="detail">
          PHP / JavaScript / Java / Python
          <br>ベトナム語 / ペルシア語（鋭意学習中）
        </p>
        <div class="flex-wrapper">
          <div class="border"></div>
          <h4 class="title">Frameworks</h4>
        </div>
        <p class="detail">Laravel / Vue.js / CakePHP / jQuery</p>
        <div class="flex-wrapper">
          <div class="border"></div>
          <h4 class="title">Experiences</h4>
        </div>
        <dl class="dl">
          <dt class="dt">2015.04</dt>
          <dd class="dd">横浜国立大学経済学部 入学</dd>
          <dt class="dt">2017.07 - 2018.07</dt>
          <dd class="dd">ベトナム・ハノイ貿易大学 交換留学</dd>
          <dt class="dt">2019.02 - Now</dt>
          <dd class="dd">
            Webエンジニアインターン
            <br>@Howtelevision, Inc.
          </dd>
          <dt class="dt">2019.06 - Now</dt>
          <dd class="dd">
            ベトナム語による事務業務補助
            <br>@Ueda Trading Co., Ltd.
          </dd>
        </dl>
        <div class="flex-wrapper">
          <div class="border"></div>
          <h4 class="title">Upcoming</h4>
        </div>
        <dl class="dl">
          <dt class="dt">Before Graduation</dt>
          <dd class="dd">イランに行きたいです〜</dd>
          <dt class="dt">2020.03</dt>
          <dd class="dd">卒業見込み（！）</dd>
          <dt class="dt">2020.04</dt>
          <dd class="dd">外資系企業に入社予定。Go！社畜Go！</dd>
        </dl>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>

