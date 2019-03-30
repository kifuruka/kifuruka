<template>
  <section v-if="isActivity">
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-8 child-flame">
            <div class="content-flame">
              <h1>{{activity.sub_title1}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents1}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image1" class="u-img" alt="#">
              </div>
            </div>
            <div class="content-flame">
              <h1>{{activity.sub_title2}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents2}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image2" class="u-img" alt="#">
              </div>
            </div>
            <div class="content-flame">
              <h1>{{activity.sub_title3}}</h1>
              <div class="donaition-text-flame">
                <p>{{activity.sub_contents3}}</p>
              </div>
              <div class="donaition-img-flame">
                <img :src="activity.sub_image3" class="u-img" alt="#">
              </div>
            </div>
          </div>
          <!-- 右側のカード -->
          <div class="tile is-child is-4 child-right-flame">
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://bulma.io/images/placeholders/1280x960.png"
                      alt="Placeholder image"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content">
                    <router-link to="/DonationDetails" class="button is-medium custom-btn">
                      <strong>この寄付を選ぶ</strong>
                    </router-link>
                  </div>
                </div>
                <div class="content">これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。 これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。</div>
                <div>
                  <p>
                    寄付金額
                    <span>¥5,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span>2020年12月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://bulma.io/images/placeholders/1280x960.png"
                      alt="Placeholder image"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content">
                    <router-link to="/" class="button is-medium custom-btn">
                      <strong>この寄付を選ぶ</strong>
                    </router-link>
                  </div>
                </div>
                <div class="content">これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。 これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。</div>
                <div>
                  <p>
                    寄付金額
                    <span>¥5,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span>2020年12月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://bulma.io/images/placeholders/1280x960.png"
                      alt="Placeholder image"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content">
                    <router-link to="/" class="button is-medium custom-btn">
                      <strong>この寄付を選ぶ</strong>
                    </router-link>
                  </div>
                </div>
                <div class="content">これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。 これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。</div>
                <div>
                  <p>
                    寄付金額
                    <span>¥5,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span>2020年12月</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card card-margin">
              <div class="card-content">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img
                      src="https://bulma.io/images/placeholders/1280x960.png"
                      alt="Placeholder image"
                    >
                  </figure>
                </div>
                <div class="media card-flame">
                  <div class="media-content">
                    <router-link to="/" class="button is-medium custom-btn">
                      <strong>この寄付を選ぶ</strong>
                    </router-link>
                  </div>
                </div>
                <div class="content">これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。 これは、近畿大学ラグビー部の寄付返礼サンプルテキストです。</div>
                <div>
                  <p>
                    寄付金額
                    <span>¥5,000</span>
                  </p>
                </div>
                <div>
                  <p>
                    掲載期間
                    <span>2020年12月</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- 法人案内 -->
            <div class="card card-margin">
              <div class="card-content company-card">
                <div>
                  <p>法人・企業の皆さまへ</p>
                </div>
                <div>
                  <p>
                    法人・企業の皆様の
                    <br>寄付はこちらから
                  </p>
                </div>
                <div class="media-content company-btn-flame">
                  <router-link to="/" class="button is-medium custom-btn">
                    <strong>法人寄付</strong>
                  </router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import DonationImg from "../../images/donation/d_kin_rag.jpg";
import DonationImg2 from "../../images/donation/d_kin_rag2.jpg";
import DonationImg3 from "../../images/donation/d_kin_rag3.jpg";
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      DonationImg,
      DonationImg2,
      DonationImg3
    };
  },
  computed: {
    ...mapGetters({
      isActivity: "activity/isActivity",
      activity: "activity/getActivityData"
    })
  }
};
</script>

<style lang="scss" scoped>
section {
  margin-top: 80px;
  margin: 80px 5% 0 5%;
  // background-color: #222222;
  // height: 2000px;
  .container {
    max-width: 1160px;
    
    // background-color: rgb(121, 121, 212);
    // height: 1000px;

    div {
      .child-right-flame {
        padding: 32px;

        .card-margin {
          margin-bottom: 32px;
        }
      }
    }
  }
}

.u-img {
  width: 100%;
  height: 100% !important;
}
.custom-btn {
  background-color: #ffe035;
  color: #333333;
  border-radius: 0;
  width: 100%;
  border-color: #ffe035;
}

.card-flame {
  margin-top: 16px;
}

.child-flame {
  .content-flame {
    margin-bottom: 100px;

    h1 {
      font-size: 2rem;
    }

    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;
    }

    .donaition-img-flame {
      margin-top: 32px;
    }
  }
}

.company-card {
  background-color: #828282;

  p {
    text-align: center;
    font-size: 1.6rem;
    margin-top: 16px;
    color: white;
  }
  .company-btn-flame {
    margin-top: 32px;
    margin-bottom: 32px;

    .custom-btn {
      background-color: #db6b6b;
      border-color: #db6b6b;
      color: white;
    }
  }
}
</style>
