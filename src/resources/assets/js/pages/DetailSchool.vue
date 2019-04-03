<template>
  <div>
    <detail-school-top/>
    <detail-school-main-title/>
    <detail-school-main1/>
    <detail-school-main2/>
    <detail-school-main3/>
    <detail-school-active-title/>
    <activity-card/>
  </div>
</template>

<script>
import DetailSchoolTop from "../components/DetailSchoolTop";
import DetailSchoolMainTitle from "../components/DetailSchoolMainTitle";
import DetailSchoolMain1 from "../components/DetailSchoolMain1";
import DetailSchoolMain2 from "../components/DetailSchoolMain2";
import DetailSchoolMain3 from "../components/DetailSchoolMain3";
import DetailSchoolActiveTitle from "../components/DetailSchoolActiveTitle";
import ActivityCard from "../components/ActivityCard";

import { mapGetters, mapMutations, mapActions } from "vuex";

export default {
  components: {
    DetailSchoolTop,
    DetailSchoolMainTitle,
    DetailSchoolMain1,
    DetailSchoolMain2,
    DetailSchoolMain3,
    DetailSchoolActiveTitle,
    ActivityCard
  },
  data() {
    return {
      id: this.$route.params.id
    };
  },
  created() {
    this.getSchool();
  },

  methods: {
    ...mapActions({
      getSchoolData: "schools/getSchoolData"
    }),

    getSchool() {
      this.getSchoolData(this.$route.params.id);
    }
  }
};
</script>

<style>
</style>
