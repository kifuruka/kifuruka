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
                    v-model="email"
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
                    v-model="password"
                    @keyup.enter="login"
                    required
                  >
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
              </div>
              <div class="btn__container">
                <button class="button is-large is-rounded" @click="login">ログインする</button>
              </div>

              <div class="reset__password">
                <router-link to="/register">新規登録の方はこちら</router-link>
                <span class="is-hidden-mobile">/</span>
                <br class="is-hidden-desktop">
                <a>パスワードを忘れた方はこちら</a>
              </div>
            </form>
          </div>
        </section>
      </div>
    </template>
  </div>
</template>

  </div>
</template>

<script>
import MessageTitle from "../components/MessageTitle";
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
      email: "",
      password: ""
    };
  },

  methods: {
    login() {
      axios
        .post("/auth/login", { email: this.email, password: this.password })
        .then(res => {
          const token = res.data.access_token;
          axios.defaults.headers.common["Authorization"] = "Bearer " + token;
          state.isLogin = true;
          console.log(this.email);
          // this.$router.push({ path: "/" });
        })
        .catch(error => {
          console.log("gogogogogo");
          this.isError = true;
        });
    }
  }
};
</script>
