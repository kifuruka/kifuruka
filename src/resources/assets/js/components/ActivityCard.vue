<template>
  <section>
    <div class="container columns is-multiline">
      <!-- <div class="container flex-flame columns"> -->
      <!-- <div v-for="item in fetchAllData" :key="item.id" class>
        <router-link :to="{ name : '', params : { id: item.id }}">
          <card :data="item"/>
        </router-link>
      </div>-->
      <!-- <div v-for="item in fetchAllData" :key="item.id" class="column is-one-quarter"></div> -->
      <!-- カード１ -->
      <div v-for="(value, index) in sliceValues" :key="index" class="card-box column is-one-third">
        <div class="card">
          <div calss="card_image_container" style="position: relative;">
            <div class="card-image item item--first">
              <figure class="image is-4by3">
                <img :src="value.image" class="card-img-top" alt="Placeholder image">
              </figure>
            </div>
            <div class="school_msg has-text-centered">
              <p class="title is-7 is-size-7-mobile school_name">{{value.school_name}}</p>
              <p class="subtitle is-6 is-size-7-mobile school_message">{{value.message}}</p>
            </div>
          </div>
          <div class="school_msg has-text-centered">
            <p class="title is-7 is-size-7-mobile school_name">{{value.school_name}}</p>
            <p class="subtitle is-6 is-size-7-mobile school_message">{{value.message}}</p>
          </div>
        </div>
        <div class="card-content">
          <p class="subtitle is-6 has-text-centered">{{value.school_name}}</p>
        </div>
        <div class="columns detail">
          <div class="column">
            <p class="card-text col has-text-centered" style="font-size:0.9rem">
              寄付金額
              <br>
              <strong>{{ value.amount }}円〜</strong>
            </p>
          </div>
          <div class="column">
            <p class="card-text col has-text-centered" style="font-size:0.9rem">
              応募数
              <br>
              <strong>{{ value.supporter }}人</strong>
            </p>
          </div>
          <div class="column">
            <p class="card-text col has-text-centered" style="font-size:0.9rem">
              残り
              <br>
              <strong>{{ value.days }}日</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- カード２ -->
    <!-- <div class="card">
            <div calss="card_image_container" style="position: relative;">
              <div class="card-image item item--first">
                <figure class="image is-4by3">
                  <img
                    src="https://bulma.io/images/placeholders/1280x960.png"
                    class="card-img-top"
                    alt="Placeholder image"
                  >
                </figure>
              </div>
              <div class="school_msg has-text-centered">
                <p class="title is-7 is-size-7-mobile school_name">近畿大学</p>
                <p class="subtitle is-6 is-size-7-mobile school_message">全国制覇したい</p>
              </div>
            </div>
            <div class="card-content">
              <p class="subtitle is-6 has-text-centered">近畿大学</p>
            </div>
            <div class="columns detail">
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">寄付金額
                  <br>
                  <strong>{{ amount }}円〜</strong>
                </p>
              </div>
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">応募数
                  <br>
                  <strong>{{ supporter }}人</strong>
                </p>
              </div>
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">残り
                  <br>
                  <strong>{{ days }}日</strong>
                </p>
              </div>
            </div>
    </div>-->
    <!-- カード３ -->
    <!-- <div class="card">
            <div calss="card_image_container" style="position: relative;">
              <div class="card-image item item--first">
                <figure class="image is-4by3">
                  <img
                    src="https://bulma.io/images/placeholders/1280x960.png"
                    class="card-img-top"
                    alt="Placeholder image"
                  >
                </figure>
              </div>
              <div class="school_msg has-text-centered">
                <p class="title is-7 is-size-7-mobile school_name">近畿大学</p>
                <p class="subtitle is-6 is-size-7-mobile school_message">全国制覇したい</p>
              </div>
            </div>
            <div class="card-content">
              <p class="subtitle is-6 has-text-centered">近畿大学</p>
            </div>
            <div class="columns detail">
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">寄付金額
                  <br>
                  <strong>{{ amount }}円〜</strong>
                </p>
              </div>
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">応募数
                  <br>
                  <strong>{{ supporter }}人</strong>
                </p>
              </div>
              <div class="column">
                <p class="card-text col has-text-centered" style="font-size:0.9rem">残り
                  <br>
                  <strong>{{ days }}日</strong>
                </p>
              </div>
            </div>
    </div>-->
    <!-- </div> -->
    <!-- <div class="btn-box">
      <button  class="btn-add btn-add1">もっと見る</button>
    </div>-->
    <button-more v-on:click="addvalues"/>
    

  
 


  </section>
</template>


<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
import ButtonMore from "./ButtonMore";

export default {
  data() {
    return {
      info: null,
      count: 3,

      values: [
        {
          school_name: "近畿大学",
          message: "全国制覇したい",
          image: "https://rugby-rp.com/wp-content/uploads/MOVED/tabuchi.jpg",
          amount: 100,
          supporter: 10,
          days: 5
        },
        {
          school_name: "青山学院大学",
          message: "全国制覇したいしたい",
          image:
            "https://iwiz-spo.c.yimg.jp/im_siggStqzZpRoVC9IRsasQFRhkg---x600-y600-q90-pril/c/sports/text/images/2018/0103/201801030001-spnavi_2018010300003_view.jpg",
          amount: 200,
          supporter: 20,
          days: 6
        },
        {
          school_name: "関西学院大学",
          message: "全国制覇したいしたいしたい",
          image: "https://www.kwansei.ac.jp/news/2018/images/0000224427_ex.jpg",
          amount: 300,
          supporter: 30,
          days: 7
        },
        {
          school_name: "関西学院大学",
          message: "全国制覇したいしたいしたい",
          image: "https://www.kwansei.ac.jp/news/2018/images/0000224427_ex.jpg",
          amount: 300,
          supporter: 30,
          days: 7
        },
        {
          school_name: "関西学院大学",
          message: "全国制覇したいしたいしたい",
          image: "https://www.kwansei.ac.jp/news/2018/images/0000224427_ex.jpg",
          amount: 300,
          supporter: 30,
          days: 7
        },
        {
          school_name: "関西学院大学",
          message: "全国制覇したいしたいしたい",
          image: "https://www.kwansei.ac.jp/news/2018/images/0000224427_ex.jpg",
          amount: 300,
          supporter: 30,
          days: 7
        }
      ]
    };
  },
  //   mounted(){
  //     $on('click', this.addvalues)
  // },
  methods: {
    addvalues() {
      console.log(this.count);
      this.count += 3;
      console.log(this.count);
      sliceValues();
    }
  },
  computed: {
    // 配列の個数を決定する
    sliceValues() {
      return this.values.slice(0, this.count);
    }
  },
  components: {
    ButtonMore
  }
  // computed: {
  //   ...mapGetters(["fetchAllData"])
  // },

  // created() {
  //   this.fetchPostHomeCard();
  // },

  // methods: {
  //   ...mapActions(["fetchPostHomeCard"])
  // }
};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  padding-top: 81px;
}
.container {
  // display: flex;
  margin: 0 auto;
  max-width: 1160px;
}

.is-multiline {
  flex-wrap: wrap;
}

.card-box {
  // width: 80%;
}

.card {
  // margin: 0 24px;
  margin: 0 8px;
  // width: 30%;
}
.card_image_container {
  position: relative;
}

.item {
  position: relative;
  overflow: hidden;
  box-shadow: 0 1px 8px rgba(0, 0, 0, 0.15);
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
.card-body-school_name {
  margin: -5%;
  /* border-bottom:dotted; 
    border-bottom-width: 10%; */
}

.detail {
  padding: -0.5rem;
  display: flex;
}

.card-text {
  color: #707070;
}

.btn-box {
  margin: 3% auto;
  text-align: center;
}

.btn-add {
  background-color: transparent;
  border: none;
  cursor: pointer;
  outline: none;
  padding: 0;
  appearance: none;
}
.btn-add1 {
  background-color: #ffe035;
  color: white;
  border-radius: 1em;
  width: 6.3em;
  border-color: #ffe035;
  box-shadow: none;
  font-size: 1.3em;
  font-weight: bold;
  padding: 0.3%;
}

@media screen and (max-width: 768px) {
  section {
    margin: 0 5%;
  }

  .container {
    display: block;
  }

  .card {
    width: 100%;
    margin: 10% auto;
  }
}
</style>
