<template>
  <section v-if="isSchoolStatus">
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-6 order-3">
            <div class="img-flame">
              <img :src="school.sub_image2" class="u-img" alt="#">
            </div>
          </div>
          <div class="tile is-child is-1 order-2"></div>
          <div class="tile is-child is-5 order-1">
            <div class="school_text">
              <h2>{{school.sub_title2}}</h2>
              <p>{{school.sub_contents2}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolCampus from "../../images/SchoolCampus/aoyama_campus2.jpg";
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
  padding-top: 0.5%;
  padding-bottom: 0.5%;
  background-color: #fffdf3;

  .container {
    max-width: 1160px;
    margin-top: 80px;
    margin-bottom: 80px;
    h2 {
      font-size: 1.5rem;
      font-weight: bold;
      text-align: left;
      padding-bottom: 2%;
    }
  }
}

img {
  vertical-align: bottom;
}

@media screen and (max-width: 768px) {
  .is-parent {
    display: flex;
  }
  .is-parent {
    flex-direction: column;
  }
  .order-1 {
    order: 1;
  }
  .order-2 {
    order: 2;
  }
  .order-3 {
    order: 3;
  }
}

@media screen and (max-width: 768px) {
  section .container {
    margin-bottom: 0px;
  }

  .school_text {
    margin: 0 5% 2.5% 5%;
  }

  // section h2 {
  //   margin: 0 %;
  // }
  .school_text {
    margin: 0 5% 2.5% 5%;
  }
}
</style>
