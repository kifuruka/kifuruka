<template>
  <section>
    <div class="feature" id="app">
        <h2>参加学校</h2>

            <slick
            ref="slick"
            :options="slickOptions">
            <div v-for="(image, index) in images" :key="index" class="image-thumb">
                <img :src="image.first_image_url">
            </div>
            </slick>

        <carousel class="container_feature" v-bind:per-page=4>
            <slide class="item" v-for='(value, i) in 4' :key='i'>
            <!-- <slide class="item" v-for="i in info.length"> -->
                <a href="http://webcreatorbox.com/about">
                    <section class="card">
                        <div class="card-content">
                            <h3 class="card-title">近畿大学</h3>
                        </div>
                        <img class="card-img" src="https://www.kindai.ac.jp/img/ogimg/ogp.jpg"  alt="写真">
                        <div class="card-content">
                            <h4 class="card-title">活動件数：1 件</h4>
                        </div>
                    </section>
                </a>
            </slide>
        </carousel>

         <carousel class="container_feature" v-bind:per-page=4>
            <slide class="item" v-for='(value, i) in info.length' :key='i'>
                 <a href="http://webcreatorbox.com/about">
                    <section class="card">
                        <div class="card-content">
                            <h3 class="card-title">{{ info[i-1].school_name }}</h3>
                        </div>
                        <img class="card-img" v-bind:src="info[i-1].logo" alt="写真">
                        <div class="card-content">
                            <h4 class="card-title">活動件数：{{ info[i-1].activity }}件</h4>
                        </div>
                    </section>
                </a>
            </slide>
        </carousel>
    </div>
  </section>
</template>


<script>

    // vue-slickをインポート
    import Slick from 'vue-slick';
    export default {
        // bladeから受け取るデータを指定
        props: ['images'],
        // コンポーネント使用の宣言
        components: { Slick },
        data() {
            return {
                // slickの設定
                slickOptions: {
                    autoplay: true,
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 6,
                    slidesToScroll: 3,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2
                            }
                        },
                    ]
                },
            };
        },
        methods: {
            next() {
                this.$refs.slick.next();
            },
            prev() {
                this.$refs.slick.prev();
            },
            reInit() {
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            },
        },
    }

// import VueCarousel from "https://ssense.github.io/vue-carousel/js/vue-carousel.min.js";
// import Axios from "https://unpkg.com/axios/dist/axios.min.js";
// import Moment from "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js";
// import MomentWithLocales from "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment-with-locales.min.js";
// import MomentTimezone from "https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.21/moment-timezone.min.js";
// import axios from 'axios';

// export default {
//     data () {
//         return {
//             info: null
//         }
//     },
//     components: {
//         // 'carousel': VueCarousel.Carousel,
//         // 'slide': VueCarousel.Slide
//     },
//     mounted () {
//         axios
//             .get('https://script.google.com/macros/s/AKfycbx7EQYeIRZzh1P42JDWBsqCVQPEcnum4FU2Qy6_ta4-ofRe19eh/exec')
//             .then(response => {
//                 this.info = response.data
//             })
//     }
// }
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

    .container h2  {
    /* webcreatorbox.com
    Webクリエイターボックス
    WebデザインやWebサイト制作、最新のWeb業界情報などを紹介していくサイト。 */
    position: relative;
    display: inline-block;
    margin-bottom: 2em;
    color:white;
    }

    .container h2:before {
    content: '';
    position: absolute;
    bottom: -15px;
    display: inline-block;
    width: 2.5rem;
    height: 0.2rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    background-color: #FFE65D;
    border-radius: 2px;
    }

    .container h3  {
    font-size: 1rem;
    }
    .container h4  {
    font-size: 0.8rem;
    }


    .item  {
    margin-bottom:1%;
    }


    .item a {
    text-decoration:none;
    }

    .card {
    width: 200px;
    margin-right:10px;
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
