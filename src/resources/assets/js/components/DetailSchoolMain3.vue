<template>
  <section v-if="isSchoolStatus">
    <div class="container">
      <div>
        <h2>{{school.sub_title3}}</h2>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-5">
            <div class="school_text">
              <p>{{school.sub_contents3}}</p>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
          <div class="tile is-child is-6">
            <div class="img-flame">
              <router-link to="/">
                <img :src="school.sub_image3" class="u-img" alt="#">
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolActive from "../../images/SchoolCampus/aoyama_active01.jpg";
import { mapGetters } from "vuex";
export default {
  data() {
    return {
      SchoolActive
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
    margin-top: 80px;
    margin-bottom: 80px;
  .container {
    max-width: 1160px;
    h2 {
      font-size: 1.5rem;
      font-weight: bold;
      text-align: left;
      padding-bottom: 2%;
    }
  }
}

img{
  vertical-align: bottom;
}


@media screen and (max-width:768px) { 

section h2 {
    margin: 0 5%;
    }
.school_text{
    margin: 0 5% 2.5% 5%;
    }


}
</style>
