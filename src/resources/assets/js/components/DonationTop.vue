<template>
  <section v-if="isActivity">
    <div class="container">
      <div class="donation-title">
        <h1>{{activity.title}}</h1>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- 左側 -->
          <div class="tile is-child is-8 child-flame">
            <div class="donaition-img-flame">
              <img :src="activity.activitie_img" class="u-img" alt="#">
            </div>
            <div class="donaition-text-flame">
              <h1>{{activity.activitie_name}}</h1>
              <p>{{activity.top_contents}}</p>
            </div>
          </div>
          <!-- 右側 -->
          <div class="tile is-child is-4 child-right-flame">
            <div class="top-right-flame">
              <div>
                <p class="top-title">寄付総額</p>
                <p class="top-contents">
                  {{activity.total_donation}}
                  <span>円</span>
                </p>
              </div>
              <div>
                <p class="top-title">応援者数</p>
                <p class="top-subtitle">
                  <span class="top-contents-data">{{activity.fans}}</span> 人
                </p>
              </div>
              <div>
                <p class="top-title">今年の目標達成日まで</p>
                <p class="top-subtitle">
                  あと
                  <span class="top-contents-data">244</span>日
                </p>
              </div>
              <div class="media-content btn-flame">
                <router-link to="/" class="button is-medium custom-btn">
                  <strong>この活動を応援</strong>
                </router-link>
              </div>

              <div class="web-link-flame">
                <p class="top-title">公式WEBサイト</p>
                <a v-bind:href="activity.school.url">https://kindai-rugby.jp/</a>
              </div>
              <div class="sns-link-flame">
                <div class="media-content btn-flame">
                  <a class="button is-medium fb-btn">
                    <strong>Facebookでシェア</strong>
                  </a>
                </div>

                <div class="media-content btn-flame">
                  <a class="button is-medium tw-btn">
                    <strong>Twitterでシェア</strong>
                  </a>
                </div>

                <div class="media-content btn-flame">
                  <a class="button is-medium li-btn">
                    <strong>LINEでシェア</strong>
                  </a>
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
import DonationImg from "../../images/donation/d_kin_rag_top.jpg";
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      DonationImg
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
  padding-top: 63px;
  background-color: #fffdf3;

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
    padding: 16px;

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

.btn-flame {
  text-align: center;
  margin-top: 24px;

  .custom-btn {
    background-color: #ffe035;
    color: #333333;
    height: 4rem;
    font-weight: bold;
    font-size: 1.6rem;
    width: 100%;
    border-color: #ffe035;
  }
}

.web-link-flame {
  margin-top: 16px;
  a {
    font-size: 1.2rem;
    padding: 8px;
  }
}

.sns-link-flame {
  margin-top: 40px;

  .fb-btn,
  .tw-btn,
  .li-btn {
    color: white;
    height: 4rem;
    font-weight: bold;
    font-size: 1rem;
    width: 90%;
  }

  .fb-btn {
    border-color: #3b5998;
    background-color: #3b5998;
  }
  .tw-btn {
    border-color: #55acee;
    background-color: #55acee;
  }
  .li-btn {
    border-color: #00b900;
    background-color: #00b900;
  }
}
</style>
