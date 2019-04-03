<template>
  <div>
    <message-title :message="message"/>
    <template>
      <div>
        <section class="section">
          <div class="form__container">
            <p v-show="isError">認証に失敗しました。</p>
            <form>
              <p class="login__title">ログイン</p>
              <div class="field">
                <label class="label">メールアドレス</label>
                <div class="control has-icons-left has-icons-right">
                  <input
                    class="input"
                    type="email"
                    placeholder="半角英数"
                    v-model="user.email"
                    @keyup.enter="login"
                    required
                    autofocus
                  >
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>
              <div class="field">
                <label class="label">パスワード</label>
                <div class="control has-icons-left">
                  <input
                    class="input"
                    type="password"
                    placeholder="半角英数"
                    v-model="user.password"
                    @keyup.enter="login"
                    required
                  >
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
              </div>
              <div class="btn__container">
                <button class="button is-large is-rounded" @click.prevent="handlelogin">ログインする</button>
              </div>

              <div class="reset__password">
                <router-link to="/register">新規登録の方はこちら</router-link>
                <!-- <span class="is-hidden-mobile">/</span>
                <br class="is-hidden-desktop">
                <a>パスワードを忘れた方はこちら</a>-->
              </div>
            </form>
          </div>
        </section>
      </div>
    </template>
  </div>
</template>


<script>
import MessageTitle from "../components/MessageTitle";
import { mapGetters, mapActions } from "vuex";
// import LoginForm from "../components/LoginForm";
export default {
  components: {
    MessageTitle
    // LoginForm
  },
  data() {
    return {
      message: "ログイン",
      isError: false,
      user: {
        email: "",
        password: ""
      }
    };
  },

  methods: {
    ...mapActions({
      login: "auth/login"
    }),
    async handlelogin() {
      await this.login({
        email: this.user.email,
        password: this.user.password
      });
      // console.log(this.state.data);
      this.$router.push("/");
    }
    // handlelogin() {
    //   axios
    //     .post("/login", { email: this.email, password: this.password })
    //     .then(res => {
    //       const token = res.data.access_token;
    //       axios.defaults.headers.common["Authorization"] = "Bearer " + token;
    //       state.isLogin = true;
    //       // console.log(this.email);
    //       // this.$router.push({ path: "/" });
    //     })
    //     .catch(error => {
    //       // console.log("gogogogogo");
    //       this.isError = true;
    //     });
    // }
  }
};
</script>


<style lang="scss" scoped>
.section {
  padding: 128px 24px;
  .form__container {
    @media screen and (min-width: 1024px) {
      padding: 0 400px;
    }
    .btn-line {
      // background-color: #00c300;
      // border: 1px solid #00c300;
      color: white;
    }
    .login__title {
      padding-top: 10px;
      padding-bottom: 15px;
      font-weight: bold;
      font-size: 18px;
    }
    .label {
      font-size: 12px;
      font-weight: normal;
    }
    .btn__container {
      margin-top: 24px;
      text-align: center;

      .button {
        background-color: #ffe035;
        border: 1px solid #ffe035;
        font-size: 1rem;
        width: 50%;
      }
    }
    .reset__password {
      margin-top: 15px;
      text-align: center;
    }
  }
}
</style>
