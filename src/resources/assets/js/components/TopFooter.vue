<template>
  <footer>
    <!-- <div class="container">
      <div class="content has-text-centered">
        <div class="footer__rights">© 2019 Kifuruka Co.,Ltd.All rights reserved.</div>
      </div>
    </div>-->
    <div class="level">
      <div class="level-left">
        <router-link to="/" class="navbar-item">
          <img src="../store/images/kifuruka_logo.png" alt="がっこう寄付納税サイト【きふるか】" decoding="async">
        </router-link>
        <div class="navbar-start">
          <p>学生のチャレンジをあなたの寄付で応援しよう。</p>
        </div>
      </div>
      <div class="level-right">© 2019 Kifuruka Co.,Ltd.All rights reserved.</div>
    </div>
  </footer>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
footer {
  background-color: #ffe035;
  font-weight: bold;
  padding: 24px 32px;

  @media (max-width: 767px) {
    padding: 8px;
    width: 100%;
    display: block;
    font-size: 0.8rem;
    // text-align: center;

    p {
      text-align: center;
    }

    .level-right {
      text-align: center;
      margin-top: 0.5rem;
    }
  }
}
</style>