<template>
  <div class="allstyle">
    <donation-top/>
    <donation-main/>
    <school-sub-info/>
  </div>
</template>

<script>
import DonationTop from "../components/DonationTop";
import DonationMain from "../components/DonationMain";
import SchoolSubInfo from "../components/SchoolSubInfo";
export default {
  components: {
    DonationTop,
    DonationMain,
    SchoolSubInfo
  }
};
</script>

<style>
/* .allstyle {
  margin-left: 12px;
} */
</style>
