<template>
  <section v-if="isSchoolStatus">
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- <div class="tile is-child is-1"></div> -->
          <div class="tile is-child is-4">
            <div class="school-right-flame">
              <img :src="school.school_logo" class="logo_img" alt="#">
            </div>
            <div class="school_name">
              <span class="under">{{school.school_name}}</span>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
          <div class="tile is-child is-7">
            <div class="img-flame img-flame-sp">
              <router-link to="/">
                <img :src="school.school_img" class="u-img" alt="#">
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-child is-12">
        <p>{{school.top_contents}}</p>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolLogo from "../../images/schoolLogo/aoyama_logo.png";
import SchoolCampus from "../../images/SchoolCampus/aoyama_campus.jpg";
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      SchoolLogo,
      SchoolCampus
    };
  },
  computed: {
    ...mapGetters({
      school: "schools/getSchoolData",
      isSchoolStatus: "schools/isSchoolStatus"
    })
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
  padding: 5%;

  //   h1 {
  //     background: linear-gradient(transparent 90%, #ffe035 70%);
  //     font-size: 2.5rem;
  //     font-weight: bold;
  //     text-align: left;
  //     padding-bottom: 16px;
  //   }

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

.school_name {
  padding-top: 40%;
  padding-left: 5%;
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

img {
  vertical-align: bottom;
}

.logo_img {
  padding-top: 40%;
}

.under {
  background: linear-gradient(transparent 70%, #ffe035 70%);
  font-size: 2.5rem;
  font-weight: bold;
  text-align: left;
}

@media screen and (max-width: 768px) {
  section .container {
    margin-bottom: 80px;
  }

  .school-right-flame {
    padding: 5%;
    display: none;
  }

  .school_name {
    padding-top: 0%;
    padding-left: 5%;
  }

  .img-flame {
    padding: 0px;
  }
  .img-flame-sp {
    padding-top: 5%;
  }
  .is-child p {
    margin: 0 5%;
  }

  .is-child p {
    margin: 0 5%;
  }
}
</style>
