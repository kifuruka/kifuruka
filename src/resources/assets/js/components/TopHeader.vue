<template>
  <header>
    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <router-link to="/" class="navbar-item">
          <img src="../store/images/kifuruka_logo.png" alt="がっこう寄付納税サイト【きふるか】" decoding="async">
        </router-link>
        <div class="navbar-start">
          <p>学生のチャレンジをあなたの寄付で応援しよう。</p>
        </div>
        <a
          role="button"
          class="navbar-burger burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarHomeHeader"
          @click="dropdownToggle"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navbarHomeHeader" class="navbar-menu" :class="{'is-active': dropdownActive}">
        <div class="navbar-end">
          <router-link to="/mypage" class="navbar-item flex3 buttons">
            <strong>マイページ</strong>
          </router-link>
          <router-link to="/register" class="navbar-item flex3 buttons">
            <strong>新規登録</strong>
          </router-link>
          <div class="navbar-item">
            <div>
              <router-link to="/login" class="button is-medium custom-btn">
                <strong>ログイン</strong>
              </router-link>
            </div>
            <!-- <div v-else>
              <router-link to="/" class="button is-medium custom-btn">
                <strong>ログアウト</strong>
              </router-link>
            </div>-->
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
  data() {
    return {
      dropdownActive: false
    };
  },
  computed: {
    ...mapGetters({
      isLogin: "isloginstate"
    })
  },
  // created() {
  //   console.log(isLogin);
  // },
  methods: {
    dropdownToggle() {
      this.dropdownActive = !this.dropdownActive;
    }
  }
};
</script>

<style lang="scss" scoped >
/* .main-color {
  border-color: #ffe035;
} */

header {
  box-shadow: 0px 3px 25px rgba(77, 77, 99, 0.1);
  font-weight: bold;
  position: fixed;
  z-index: 1000;
  width: 100%;
  // height: 63px;
  background-color: white;

  nav.navbar {
    max-width: 1440px;
    margin: 0 auto;

    .navbar-start p {
      font-size: 16px;
      vertical-align: middle;
      height: 63px;
      line-height: 71px;
    }

    .buttons {
      font-size: 16px;
      margin: 0 auto;

      // border: 1px solid #ffe035;

      // color: white;

      &:hover {
        opacity: 0.7;
        background-color: #ffe035;
      }
    }

    .custom-btn {
      background-color: #ffe035;
      color: white;
      border-radius: 2em;
      width: 6.3em;
      border-color: #ffe035;
    }
  }

  @media screen and (min-width: 600px) {
    .navbar-item img {
      max-height: 2.75rem;
      margin-right: 16px;
    }
  }

  @media screen and (max-width: 600px) {
    .navbar-start {
      display: none;
    }
  }
}
</style>
