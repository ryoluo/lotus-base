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
          ご訪問ありがとうございます。サイト運営者の小林涼と申します。
        </p>
        <p>
          大学在学中にプログラミングを始め、1年半のITエンジニアインターンシップを経験後、現在SAPコンサルタントとして活動中です。
        </p>
        <p class="message-bottom">
          お問い合わせは
          <router-link to="/contact">Contact</router-link>&nbsp;もしくは
          <a href="/open/twitter" target="_blank">Twitter</a>
          からお願いいたします。
        </p>
      </div>
    </div>
    <div class="introduction">
      <ul class="ul">
        <li class="li">
          <h4 class="title">Languages</h4>
          <p class="detail">
            ベトナム語 / 英語<br />
            JavaScript / PHP / Go / Python
          </p>
        </li>
        <li class="li">
          <h4 class="title">Quolifications</h4>
          <p class="detail">
            基本情報技術者試験 (2019.04)<br />
            応用情報技術者試験 (2019.10)<br />
            AZ-900: Azure Fundamentals (2020.11)<br />
            情報処理安全確保支援士試験 (2021.04)
          </p>
        </li>
        <!-- <li class="li">
          <h4 class="title">Music</h4>
          <p class="detail">
            House / DnB / Disco / Hiphop / K-pop, V-pop
            <br />Monstercat / Barong Family
          </p>
        </li> -->
        <li class="li">
          <h4 class="title">Bio</h4>
          <dl class="dl">
            <dt class="dt">2015.04</dt>
            <dd class="dd">横浜国立大学経済学部 入学</dd>
            <dt class="dt">2017.07 - 2018.07</dt>
            <dd class="dd">ベトナム・ハノイ貿易大学 交換留学</dd>

            <dt class="dt">2020.03</dt>
            <dd class="dd">横浜国立大学経済学部 卒業</dd>
          </dl>
        </li>
        <li class="li">
          <h4 class="title">Experiences</h4>
          <dl class="dl">
            <dt class="dt">2019.06 - 2020.03</dt>
            <dd class="dd">
              ベトナム語による事務業務補助
              <br />@Ueda Trading Co., Ltd.
            </dd>
            <dt class="dt">2019.02 - 2020.07</dt>
            <dd class="dd">
              ITエンジニアインターン
              <br />@Howtelevision, Inc.
            </dd>
            <dt class="dt">2020.08 - Now</dt>
            <dd class="dd">
              SAPコンサルタント
            </dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {};
</script>
