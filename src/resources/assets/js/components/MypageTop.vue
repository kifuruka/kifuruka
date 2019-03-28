<template>
  <section>
    <div class="container">
      <div class="donation-title">
        <h1>マイページ</h1>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- 左側 -->
          <div class="tile is-child is-6 child-flame">
            <div class="donaition-img-flame">
              <img :src="DonationImg" class="u-img" alt="#">
            </div>
            <!-- <div class="donaition-text-flame">
              <h2>お礼について</h2>
              <p>これはサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。</p>
            </div> -->
          </div>
          <!-- 中央余白 -->
          <div class="tile is-child is-1 child-flame"></div>
          <!-- 右側 -->
          <div class="tile is-child is-5 child-right-flame">
            <!-- <div class="top-right-flame">
              <div>
                <p class="top-title">Kifuruka Taro</p>
                <p class="top-contents">青学駅伝　全国制覇！</p>
              </div> -->
              <!--カート-->
              <!-- <div class="cart-gray">
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">数量</label>
                    </div>
                    <div class="control">
                      <div class="select">
                        <select class="is-hovered">
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                    </div>
                    <div class="control">
                      <router-link to="/login" class="button is-medium custom-btn">
                        寄付へ進む
                      </router-link>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">寄付コードはお持ちですか？</label>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="field">
                        <p class="control control1">
                          <input class="input" type="text" placeholder="例）#7Ut9oGTD" maxlength='8'>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">入学した年内の寄付金に該当しますか？</label>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-body">
                      <div class="control control1">
                        <label class="radio">
                          <input type="radio" name="foobar">
                          <span class="radio-text">該当する</span> 
                        </label>
                        <label class="radio">
                          <input type="radio" name="foobar" checked>
                          <span class="radio-text">該当しない</span>
                        </label>
                      </div>
                    </div>
                  </div>
              </div> -->
              <!--↑カート-->
              <!--備考-->
              <!-- <div class="remarks">
                <div class="field is-horizontal">
                  <div class="field-label is-normal">
                    <label class="label">【備考】</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <p class="control">
                        Kifurukaは、プロジェクト管理者の能力、プロジェクトの実行を保証するものではありません。<br>
  また、入学した年内の寄付金（入学願書受付の開始日から入学が予定される年の年末までの期間内に納入したもの）に該当する場合は「学校の入学に係る寄附金」とみなされて寄附金控除の対象から除外されます。
                      </p>
                    </div>
                  </div>
                </div>
              </div> -->
              <!--備考-->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import DonationImg from "../../images/mypage/account.jpg";
export default {
  data() {
    return {
      DonationImg
    };
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
        font-weight: bold;
        font-size: 2rem;
      }
    }
  }
  .child-flame {
    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;
      h1 {
        font-size: 2rem;
        font-weight: bold;
        padding-bottom: 24px;
      }
      h2 {
        font-size: 1.5rem;
        font-weight: bold;
        padding-bottom: 16px;
      }
      p {
        padding-bottom: 32px;
      }
    }
    .donaition-img-flame {
      margin-top: 32px;
    }
  }
  .top-right-flame {
    margin-top: 32px;
    // background-color: aqua;
    // padding: 16px;
    .top-title {
      font-size: 1.6rem;
    }
    .top-contents {
      font-weight: bold;
      font-size: 3rem;
      text-align: right;
    }
    .top-subtitle {
      font-weight: bold;
      font-size: 1.8rem;
      text-align: right;
      .top-contents-data {
        font-weight: bold;
        font-size: 3rem;
      }
    }
  }
}
.cart-gray{
  background: #EDEDED;
  margin-top: 5%;
  padding: 5%;
}
.remarks{
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
.field-label{
  text-align: left;
  margin-right: 0rem; 
}
.label{
    font-size: 0.8rem;
    font-weight: normal;
}
.radio-text{
  font-size: 0.8rem;
}
.control1{
  margin-left: 40%;
}
.u-img{
    border-radius: 50%;  /* 角丸半径を50%にする(=円形にする) */
    width:  50%;       /* ※縦横を同値に */
    height: 50;       /* ※縦横を同値に */
}
</style>