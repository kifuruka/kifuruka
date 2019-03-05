<template>
  <div>
    <detail-school-top/>
    <donation-main/>
    <school-sub-info/>
  </div>
</template>

<script>
import DetailSchoolTop from "../components/DetailSchoolTop";
import DonationMain from "../components/DonationMain";
import SchoolSubInfo from "../components/SchoolSubInfo";
export default {
  components: {
    DetailSchoolTop,
    DonationMain,
    SchoolSubInfo
  }
};
</script>

<style>