<template>
  <div>
    <detail-school-top/>
    <detail-school-main-title/>
    <detail-school-active-title/>
    <activity-card/>
  </div>
</template>

<script>
import DetailSchoolTop from "../components/DetailSchoolTop";
import DetailSchoolMainTitle from "../components/DetailSchoolMainTitle";
import DetailSchoolActiveTitle from "../components/DetailSchoolActiveTitle";
import ActivityCard from "../components/ActivityCard";
export default {
  components: {
    DetailSchoolTop,
    DetailSchoolMainTitle,
    DetailSchoolActiveTitle,
    ActivityCard
  }
};
</script>

<style>