<template>
  <section v-if="isSchoolStatus">
    <div class="container">
      <div>
        <h2>{{school.sub_title1}}</h2>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-5">
            <div class="school_text">
              <p>{{school.sub_contents1}}</p>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
          <div class="tile is-child is-6">
            <div class="img-flame">
              <img :src="school.sub_image1" class="u-img" alt="#">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolCampus from "../../images/SchoolCampus/aoyama_campus1.jpg";
import { mapGetters } from "vuex";

export default {
  data() {
    return {
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
    margin-bottom: 80px;
    h2 {
      font-size: 1.5rem;
      font-weight: bold;
      text-align: left;
      // padding-left:2%;
      padding-bottom: 2%;
      // margin: 0 5%;
    }
  }
}

img {
  vertical-align: bottom;
}

@media screen and (max-width: 768px) {
  section .container {
    margin-bottom: 0px;
  }

  section h2 {
    margin: 0 5%;
  }
  .school_text {
    margin: 0 5% 2.5% 5%;
  }
}
</style>
