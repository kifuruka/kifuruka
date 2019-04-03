<template>
  <!-- <section v-if="isUserStatus"> -->
  <section>
    <div class="container">
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
            <p class="control is-expanded has-icons-left">
              {{user.account_name}}
              <!-- <input
                v-model="account_name"
                class="input"
                type="text"
                :placeholder="アカウント名"
              >-->
              <!-- <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>-->
            </p>
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
              <p class="control is-expanded has-icons-left has-icons-right">
                {{user.email}}
                <!-- <input
                  class="input is-success"
                  type="email"
                  placeholder="Email"
                  value="info@kifuruka.com"
                >
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>-->
              </p>
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
            <p class="control is-expanded has-icons-left">
              ********
              <!-- {{user.password}} -->
              <!-- <input class="input" type="password" placeholder="※※※※※※※※">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>-->
            </p>
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
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left">
              {{user.UserDetail.user_last_name}} {{user.UserDetail.user_first_name}}
              <!-- <input class="input" type="text" placeholder="姓">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>-->
            </p>
            <p v-else>登録されておりません。</p>
          </div>
          <!-- <div class="field">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left">
              {{user.UserDetail.user_first_name}}
              <input class="input" type="text" placeholder="名">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
            <p v-else>登録されておりません。</p>
          </div>-->
        </div>
      </div>
      <!-- ふりがな -->
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">ふりがな</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left">
              <!-- {{user.UserDetail.user_last_kana }} -->
              <!-- <input class="input" type="text" placeholder="せい">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>-->
            </p>
            <p v-else>登録されておりません。</p>
          </div>
          <div class="field">
            <p v-if="user.UserDetail" class="control is-expanded has-icons-left">
              <!-- {{user.UserDetail.user_first_kana}} -->
              <!-- <input class="input" type="text" placeholder="めい">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>-->
            </p>
            <p v-else>登録されておりません。</p>
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
              <p v-if="user.UserDetail" class="control is-expanded has-icons-left has-icons-right">
                <!-- {{user.UserDetail.user_first_kana}} -->
                <!-- <input class="input" type="tel" placeholder="電話番号">
                <span class="icon is-small is-left">
                  <i class="fas fa-phone"></i>
                </span>-->
              </p>
              <p v-else>登録されておりません。</p>
            </div>
          </div>
        </div>
      </div>
      <!-- 性別 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">性別</label>
        </div>
        <div class="field-body radio-box">
          <div class="field is-narrow">
            <p
              v-if="user.UserDetail"
              class="control is-expanded has-icons-left has-icons-right"
            >{{user.UserDetail}}</p>
            <p v-else>登録されておりません。</p>
            <!-- <div class="control">
              <label class="radio">
                <input type="radio" name="sex">
                男性
              </label>
              <label class="radio">
                <input type="radio" name="sex">
                女性
              </label>
            </div>-->
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
            <div class="control is-expanded">
              <div class="select">
                <select>
                  <option>1985</option>
                  <option>2010</option>
                </select>
              </div>
              <div class="select">
                <select>
                  <option>1</option>
                  <option>12</option>
                </select>
              </div>
              <div class="select">
                <select>
                  <option>1</option>
                  <option>31</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 画像ファイル -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">アイコン画像</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="file">
              <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">画像ファイル</span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
      <!-- 案内メールの有無 -->
      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">案内メールの有無</label>
        </div>
        <div class="field-body radio-box">
          <div class="field is-narrow">
            <div class="control">
              <label class="radio">
                <input type="radio" name="mail">
                受け取る
              </label>
              <label class="radio">
                <input type="radio" name="mail" checked>
                受け取らない
              </label>
            </div>
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
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="郵便番号">
              <span class="icon is-small is-left">
                <i class="fas fa-map-marker-alt"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="都道府県">
              <span class="icon is-small is-left">
                <i class="fas fa-globe-asia"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label"></label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="市町区村">
              <span class="icon is-small is-left">
                <i class="fas fa-city"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="番地">
              <span class="icon is-small is-left">
                <i class="fas fa-map-signs"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="text" placeholder="マンション名">
              <span class="icon is-small is-left">
                <i class="fas fa-building"></i>
              </span>
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
              <button class="button is-warning custom-btn">修正</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>{{user}}</div>
  </section>
</template>

<script>
import DonationImg from "../../images/donation/d_kin_rag_top.jpg";
import { mapGetters, mapActions } from "vuex";

export default {
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