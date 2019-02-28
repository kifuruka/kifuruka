<template>
  <section class="section">
    <div class="form__container">
      <p>
        下記情報をご入力いただき、「ご利用規約」をご確認いただいたうえで「利用規約に同意してメールアドレス確認メールを送信」をクリックしてください。
        ご入力いただいたメールアドレスに会員登録用のURLを送信します。
      </p>
      <form>
        <p class="login__title">新規登録</p>
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
        <div class="field">
          <label class="label">パスワード確認用</label>
          <div class="control has-icons-left">
            <input
              class="input"
              type="password"
              placeholder="半角英数"
              v-model="password_confirmation"
              @keyup.enter="login"
              required
            >
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </div>
        </div>
        <article class="message">
          <div class="message-header">
            <p>ご利用規約</p>
          </div>
          <div class="message-body">本サービス概要
            <br>第2条 利用者は本規約に従い、自ら選択する学校に対し寄附を行うことができます。
            <br>2. 学校は、寄附に対しお礼品を提供することがあります。この場合、利用者は本システムにおいて、所定の品目のなかからお礼品を指定することができます。
            <br>3. 学校は、寄附金の用途を複数定め、利用者の希望を受け付ける場合があります。この場合、本システムにおいて用途を指定することができます。
            <br>
          </div>
        </article>
        <div class="btn__container">
          <button
            class="button is-large is-rounded"
            @click="handleRegister"
          >個人情報取扱い規約等の利用規約に同意してメールアドレス確認メールを送信</button>
        </div>

        <div class="reset__password">
          <!-- <router-link to="/login">新規登録済の方はこちら</router-link> -->
        </div>
      </form>
      <p>
        ※携帯電話でドメイン指定受信をされている場合は「@kifuruka.com」の受信設定をお願い致します。
        ※メールアドレスを間違えますと、会員登録が続けられませんのでご注意ください。
      </p>
    </div>
  </section>
</template>

<script>
import { mapActions } from "vuex";
export default {
  data() {
    return {
      email: "",
      password: "",
      password_confirmation: ""
    };
  },
  methods: {
    ...mapActions({
      register: "auth/register"
    }),
    async handleRegister() {
      await this.register({
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation
      });
      this.$router.push("/register/confirmation");
    }
  }
};
</script>

<style lang="scss" scoped>
section {
  padding: 128px 24px;
  .form__container {
    @media screen and (min-width: 1024px) {
      padding: 0 300px;
    }
    .btn-line {
      background-color: #00c300;
      border: 1px solid #00c300;
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
      }
    }
    .reset__password {
      margin-top: 15px;
      text-align: center;
    }
  }
}
</style>

 