<template>
  <section>
    <!-- <section> -->
    <div v-if="isUserStatus" class="container">
      <!-- 見出し -->
      <div class="donaition-text-flame">
        <h2>アカウント情報</h2>
      </div>
      <!-- アカウントネーム -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">アカウント名</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">{{user.account_name}}</p>
          </div>
        </div>
      </div>
      <!-- メールアドレス -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">メールアドレス</label>
        </div>
        <div class="field-body">
          <div class="field is-expanded">
            <div class="field has-addons">
              <p class="control is-expanded has-icons-left has-icons-right">{{user.email}}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- パスワード -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">パスワード</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">********</p>
          </div>
        </div>
      </div>
      <!-- 氏名 -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">氏名</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left"
            >{{user.UserDetail.user_last_name}} {{user.UserDetail.user_first_name}}</p>
            <p v-else>現在は登録されておりません。</p>
          </div>
        </div>
      </div>
      <!-- ふりがな -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">ふりがな</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left"
            >{{user.UserDetail.user_last_kana}} {{user.UserDetail.user_first_kana}}</p>
            <p v-else>現在は登録されておりません。</p>
          </div>
        </div>
      </div>

      <!-- 連絡先 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">電話番号</label>
        </div>
        <div class="field-body">
          <div class="field is-expanded">
            <div class="field has-addons">
              <p
                v-if="user.UserDetail"
                class="control is-expanded has-icons-left has-icons-right"
              >{{user.UserDetail.tel}}</p>
              <p v-else>現在は登録されておりません。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- 性別 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">性別</label>
        </div>
        <div class="field-body">
          <div class="field is-narrow">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left has-icons-right">
              <span v-if="user.UserDetail.sex == 0">男</span>
              <span v-else>女</span>
            </p>
            <p v-else>現在は登録されておりません。</p>
          </div>
        </div>
      </div>
      <!-- 生年月日_年 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">生年月日</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p v-if="user.UserDetail">{{user.UserDetail.birthday}}</p>
            <p v-else>現在は登録されておりません。</p>
          </div>
        </div>
      </div>
      <!-- 案内メールの有無 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">案内メールの有無</label>
        </div>
        <div class="field-body">
          <div class="field is-narrow">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left has-icons-right">
              <span v-if="user.UserDetail.is_info == 0">受け取る</span>
              <span v-else>受け取らない</span>
            </p>
            <p v-else>受け取る</p>
          </div>
        </div>
      </div>
      <!-- 住所 -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">住所</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left"
            >{{user.UserDetail.postal_code}}</p>
            <p v-else>現在は登録されておりません。</p>
          </div>
          <div class="field">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left"
            >>{{user.UserDetail.u_state}}</p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label"></label>
        </div>
        <div class="field-body">
          <div class="field">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left"
            >{{user.UserDetail.u_city}}</p>
          </div>
          <div class="field">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left">
              {{user.UserDetail.u_address1}}
              {{user.UserDetail.u_address2}}
            </p>
          </div>
        </div>
      </div>
      <!-- 修正ボタン -->
      <div class="field is-horizontal">
        <div class="field-label">
          <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <button class="button is-warning custom-btn" @click.prevent="updataUser">修正</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <login/>
      <!-- <router-link to="login"></router-link> -->
    </div>
  </section>
</template>

<script>
import Login from "../pages/Login";
import DonationImg from "../../images/donation/d_kin_rag_top.jpg";
import { mapGetters, mapActions } from "vuex";

export default {
  components: {
    Login
  },
  data() {
    return {
      id: "5"
      // username: this.user.account_name
      // account_name: user.account_name
      // DonationImg
    };
  },
  computed: {
    ...mapGetters({
      user: "auth/getCurrentUser",
      isUserStatus: "auth/isUserStatus"
    })
  },

  methods: {
    ...mapActions({}),

    updateUser() {}
  }
};
</script>

<style lang="scss" scoped>
section {
  padding-top: 63px;
  .container {
    max-width: 1160px;
    .donation-title {
      margin-top: 32px;
      h1 {
        font-size: 2rem;
        font-weight: bold;
      }
      h2 {
        font-size: 1.5rem;
        font-weight: bold;
        padding-bottom: 16px;
      }
    }
    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;
      h2 {
        font-size: 1.5rem;
        font-weight: bold;
        padding-bottom: 16px;
      }
      p {
        padding-bottom: 32px;
      }
    }
    .radio-box {
      border-bottom: solid 0.01em LightGrey;
    }
    .custom-btn {
      background-color: #ffe035;
      color: rgb(0, 0, 0);
      font-size: 1rem;
      border-radius: 2em;
      width: 6.3em;
      padding: 0 4em;
      margin-left: 0.5em;
      border-color: #ffe035;
    }
  }
}
.cart-gray {
  background: #ededed;
  margin-top: 5%;
  padding: 5%;
}
.remarks {
  margin-top: 5%;
}
.custom-btn {
  background-color: #ffe035;
  color: rgb(0, 0, 0);
  font-size: 1rem;
  border-radius: 2em;
  width: 6.3em;
  padding: 0 4em;
  margin-left: 0.5em;
  border-color: #ffe035;
}
.is-horizontal {
  margin: 2em 0em;
}
.field-label {
  text-align: left;
  margin-right: 0rem;
}
.label {
  font-size: 1rem;
  font-weight: normal;
  color: gray;
}
.radio-text {
  font-size: 0.8rem;
}
.control1 {
  margin-left: 40%;
}
</style>