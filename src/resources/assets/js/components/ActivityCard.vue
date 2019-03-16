<template>
  <section>
    <div class="container flex-flame">
      <!-- <div v-for="item in fetchAllData" :key="item.id" class>
        <router-link :to="{ name : '', params : { id: item.id }}">
          <card :data="item"/>
        </router-link>
      </div>-->
      <!-- <div v-for="item in fetchAllData" :key="item.id" class="column is-one-quarter"></div> -->
      <!-- カード１ -->
      <div class="card" style="width:30%">
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
      </div>
      <!-- カード２ -->
      <div class="card" style="width:30%">
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
      </div>
      <!-- カード３ -->
      <div class="card" style="width:30%">
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
      </div>
    </div>
  </section>
</template>


<script>
import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
  data() {
    return {
      info: null,
      image: "https://rugby-rp.com/wp-content/uploads/MOVED/tabuchi.jpg",
      school_name: "近畿大学",
      message: "車椅子バスケを広めたい",
      amount: 100,
      supporter: 10,
      days: 5
    };
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
  display: flex;
  margin: 0 auto;
  max-width: 1160px;
}

.card {
  margin: 0 24px;
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
}

.card-text {
  color: #707070;
}

// section {
//   max-width: 1160px;
//   margin: 0 auto;
//   margin-top: 56px;

//   .has-addons {
//     max-width: 560px;
//     height: 56px;
//     margin: 0 auto;

//     .find-frame {
//       width: 448px;

//       input {
//         height: 56px;
//         font-size: 1.5rem;
//         background-color: #f2f2f2;
//       }
//     }
//     .button-frame a {
//       width: 112px;
//       height: 56px;
//       background-color: #ffe035;
//       font-size: 1.5rem;
//       color: #222222;
//     }
//   }
// }
</style>
