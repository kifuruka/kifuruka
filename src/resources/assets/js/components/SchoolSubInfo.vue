<template>
  <section>
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- <div class="tile is-child is-1"></div> -->
          <div class="tile is-child is-7">
            <div class="img-flame">
              <router-link to="/">
                <img :src="SchoolLogo" class="u-img" alt="#">
              </router-link>
            </div>
          </div>
          <div class="tile is-child is-4">
            <div class="school-right-flame">
              <h1>近畿大学</h1>
              <p>公式SNS</p>
              <div class="sns-link">
                <a href>Facebook</a>
              </div>
              <div class="sns-link">
                <a href>Twitter</a>
              </div>
              <div class="sns-link">
                <a href>Instagram</a>
              </div>
            </div>
            <div class="media-content btn-flame">
              <router-link to="/" class="button is-medium custom-btn">
                <strong>
                  <span>近畿大学</span>の詳細を見る
                </strong>
              </router-link>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
// Vuexの読み込み
import { mapGetters, mapMutations, mapActions } from "vuex";
import SchoolLogo from "../../images/schoolLogo/kinkiuniv.jpg";
export default {
  data() {
    return {};
  }
};
</script>

<style lang="scss" scoped>
section {
  .container {
    max-width: 1160px;
    margin-top: 80px;
    margin-bottom: 160px;
  }
}

.school-right-flame {
  //   background-color: aqua;
  padding: 16px;

  h1 {
    font-size: 3rem;
    font-weight: bold;
    text-align: right;
    padding-bottom: 16px;
  }

  p {
    font-size: 1.8rem;
  }
  div {
    text-align: right;
    a {
      font-weight: bold;
      font-size: 1.6rem;
    }
  }
}
.btn-flame {
  text-align: center;
  margin-top: 16px;

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

.img-flame {
  padding: 24px;
}


@media screen and (max-width:768px) { 

.school-right-flame{
  display: flex;

    h1 {
      display: none;
    }

    p {
      display: none;
    }
    .sns-link{
      width: 33%;
      text-align: center;
    }
}

}


</style>
