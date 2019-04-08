<template>
  <section v-if="isStatus">
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
              <!-- <div class="card-content">
                <h3 class="card-title">{{school.school_name}}学校</h3>
                <h4 class="card-title">活動件数：{{school.activity_count}}</h4>
              </div> -->
              <!-- <img class="card-img" :src="school.school_img" alt="写真"> -->
                      <!-- <div class="card"> -->
                        <div calss="card_image_container" style="position: relative;">
                          <div class="card-image item item--first">
                            <figure class="image is-4by3">
                              <img :src="school.school_img" class="card-img-top" alt="Placeholder image">
                            </figure>
                          </div>
                          <div class="school_msg has-text-centered">
                            <p class="title is-7 is-size-7-mobile school_name">{{school.school_name}}</p>
                            <p class="subtitle is-6 is-size-7-mobile school_message">{{school.sub_title1}}</p>
                          </div>
                        </div>
                      <!-- </div> -->
            </section>
          </a>
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
      </swiper>
      <!-- </carousel> -->

  </section>
</template>

<script>
import "swiper/dist/css/swiper.css";
import { swiper, swiperSlide } from "vue-awesome-swiper";
import { mapGetters, mapMutations, mapActions } from "vuex";
import Homeimg1 from "../../images/topvisual/top001.jpg";
import Homeimg2 from "../../images/topvisual/top002.jpg";
import Homeimg3 from "../../images/topvisual/top003.jpg";
import Homeimg4 from "../../images/topvisual/top4.jpg";


export default {
  components: {
    swiper,
    swiperSlide
  },

  data() {
    return {
      swiperOption: {
        slidesPerView: 2,
        spaceBetween: 0,
        // centeredSlides: true,
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
  // あとでデータを引っ張ってくるまで載せておく
  // data() {
  //   return {
  //     Homeimg1,
  //     Homeimg2,
  //     Homeimg3,
  //     Homeimg4
  //   };
  // },

  // mounted: function() {
  //   // `this` は vm インスタンスを指します
  //   getimages();
  // },

  // created() {
  //   this.fetchPostTopVisual();

  // },
  // methods: {

  //   ...mapActions(["fetchPostTopVisual"])
  // }
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
  padding-top: 7%;

  .parent-frame {
    padding: 6px !important;
    max-width: 752px;
    max-height: 642px;

    .upper-frame {
      padding-bottom: 0px;

      .grandson-frame {
        margin-right: 12px !important;
        max-width: 370px;
        max-height: 250px;
      }
    }
  }
  .card_image_container {
  position: relative;
}

  .item {
    position: relative;
    overflow: hidden;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0.15);
  }

  .item:after {
    /*基本的に画像に疑似要素は付けられないので包括するボックスに加える。*/
    content: "";
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0.5; /*下に配置する画像が見えるよう、疑似要素は透過しておく*/
  }

  .item--first:after {
    background-image: linear-gradient(
      to bottom,
      transparent 0%,
      transparent 10%,
      #212529
    );
  }

  .school_msg {
    position: absolute;
    color: white;
    top: 80%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    margin: 0;
    padding: 0;
  }

  .school_name {
    position: relative;
    display: inline-block;
    color: white;
    border-bottom-style: solid;
    border-bottom-color: #ffe035;
    padding-bottom: 2%;
    margin-bottom: 3em;
    font-size: 0.5rem;
  }

  .school_message {
    color: white;
  }
  .card {
    background-color: white;
    -webkit-box-shadow: 0 0 0 rgba(0, 0, 0, 0), 0 0 0 0px rgba(0, 0, 0, 0);
    box-shadow: 0 0 0 rgba(0, 0, 0, 0), 0 0 0 0px rgba(0, 0, 0, 0);

  }
  .child-flame {
    // margin-top: 12px !important;
    padding-top: 0 !important;
    max-width: 752px !important;
    height: 250px !important;
  }
  .u-img {
    width: 100%;
    height: 100% !important;
  }
}

@media screen and (max-width: 768px){
  .tile:not(.is-child) {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
  }
  .tile.is-6 {
    -webkit-box-flex: 0;
    -ms-flex: none;
    flex: none;
    width: 50%;
  }
}


</style>

