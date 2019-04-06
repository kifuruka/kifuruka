<template>
  <section>
    <div class="tile is-ancestor">
      <!-- 左 -->
      <div class="tile is-parent parent-frame">
        <div class="tile is-child">
          <!-- <router-link to="/activity/1"> -->
          <a
              @click="routerPush({
                  name:'DetailSchool',
                  params:{id:schools[0].id}
                  })"
            >
            <img :src="Homeimg1" class="u-img" alt="#">
            </a>
          <!-- </router-link> -->
        </div>
      </div>
      <!-- 右 -->
      <div class="tile is-parent parent-frame">
        <div class="tile is-child is-vertical">
          <div class="tile is-ancestor">
            <div class="tile is-parent upper-frame">
              <div class="tile is-child is-6 grandson-frame" style="margin-bottom:0;">
                <a
                    @click="routerPush({
                        name:'DetailSchool',
                        params:{id:schools[1].id}
                        })"
                  >
                  <img :src="Homeimg2" class="u-img" alt>
                </a>
              </div>
              <div class="tileis-child is-6">
                <a
                    @click="routerPush({
                        name:'DetailSchool',
                        params:{id:schools[2].id}
                        })"
                  >
                  <img :src="Homeimg3" class="u-img" alt="#">
                </a>
              </div>
            </div>
          </div>

          <div class="tile child-flame">
            <a
                @click="routerPush({
                    name:'DetailSchool',
                    params:{id:schools[3].id}
                    })"
              >
              <img :src="Homeimg4" class="u-img" alt="#">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
import Homeimg1 from "../../images/topvisual/top001.jpg";
import Homeimg2 from "../../images/topvisual/top002.jpg";
import Homeimg3 from "../../images/topvisual/top003.jpg";
import Homeimg4 from "../../images/topvisual/top4.jpg";


export default {
  // あとでデータを引っ張ってくるまで載せておく
  data() {
    return {
      Homeimg1,
      Homeimg2,
      Homeimg3,
      Homeimg4
    };
  },

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
  padding-top: 81px;

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

