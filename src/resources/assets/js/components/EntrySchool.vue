<template>
  <section v-if="isStatus">
    <div class="feature" id="app">
      <h2>参加学校</h2>
      <!-- <carousel class="container_feature" v-bind:per-page="4"> -->
      <swiper :options="swiperOption">
        <!-- TODO: ランダムに表示したい -->
        <swiper-slide class="item" v-for="school in schools" :key="school.id">
          <a
            @click="routerPush({
                name:'DetailSchool',
                params:{id:school.id}
                })"
          >
            <section class="card">
              <div class="card-content">
                <h3 class="card-title">{{school.school_name}}学校</h3>
                <h4 class="card-title">活動件数：{{school.activity_count}}</h4>
              </div>
              <img class="card-img" :src="school.school_img" alt="写真">
            </section>
          </a>
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
      </swiper>
      <!-- </carousel> -->
    </div>
  </section>
</template>

<script>
import "swiper/dist/css/swiper.css";
import { swiper, swiperSlide } from "vue-awesome-swiper";
import { mapGetters, mapActions } from "vuex";
// import router from "../router";

export default {
  components: {
    swiper,
    swiperSlide
  },

  data() {
    return {
      swiperOption: {
        slidesPerView: 4,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      }
    };
  },

  computed: {
    ...mapGetters({
      isStatus: "schools/isStatus",
      schools: "schools/schoolAllData"
    })
  },

  created() {
    this.fetchSchools();
  },

  methods: {
    ...mapActions({
      fetchSchoolsData: "schools/fetchSchoolsData"
    }),

    fetchSchools() {
      this.fetchSchoolsData();
    },

    routerPush(router) {
      // 画面丈夫へ移動するためのもの
      window.scrollTo(0, 0);
      this.$router.push(router);
    }
  }
};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  margin-top: 40px;

  div {
    text-align: center;
    background-color: #333333;

    h1 {
      font-size: 2rem;
      font-weight: bolder;
    }
    h2 {
      font-size: 1.7rem;
      font-weight: bolder;
    }
    .feature {
      margin: 5% 0%;
      padding: 5%;
      background-color: #333333;
    }
    .container_feature {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .container h2 {
      /* webcreatorbox.com
    Webクリエイターボックス
    WebデザインやWebサイト制作、最新のWeb業界情報などを紹介していくサイト。 */
      position: relative;
      display: inline-block;
      margin-bottom: 2em;
      color: white;
    }

    .container h2:before {
      content: "";
      position: absolute;
      bottom: -15px;
      display: inline-block;
      width: 2.5rem;
      height: 0.2rem;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      background-color: #ffe65d;
      border-radius: 2px;
    }

    .container h3 {
      font-size: 1rem;
    }
    .container h4 {
      font-size: 0.8rem;
    }

    .item {
      margin-bottom: 1%;
    }

    .item a {
      text-decoration: none;
    }

    .card {
      width: 200px;
      margin-right: 10px;
      -webkit-box-shadow: none;
      box-shadow: none;
      background-color: #333333;
    }
    .card-img {
      border-radius: 0 0 0 0;
      max-width: 100%;
      height: auto;
    }
    .card-content {
      padding: 1px;
    }

    h2 a {
      text-decoration: none;
    }
    .card-title {
      text-decoration: none;
      color: #ffffff;
      font-size: 1rem;
      text-align: left;
    }
    .card-title a {
      text-decoration: none;
    }
    .card-text {
      color: #777;
      font-size: 14px;
      line-height: 1.5;
    }
    .card-link {
      text-align: center;
      border-top: 1px solid #eee;
      padding: 20px;
    }
    .card-link a {
      text-decoration: none;
      color: #ffffff;
      margin: 0 10px;
    }
    .card-link a:hover {
      color: #0090aa;
    }
  }
}
</style>
