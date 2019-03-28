<template>
  <div class="allstyle">
    <top-visual/>
    <search/>
    <activity-card/>
    <button-more/>
    <entory-school/>
    <top-message/>
    <introduction/>
    <corporate-donation/>
    <!-- <sample-vuex/> -->
  </div>
</template>

<script>
import TopVisual from "../components/TopVisual";
import Search from "../components/Search";
import ActivityCard from "../components/ActivityCard";
import ButtonMore from "../components/ButtonMore";
import TopMessage from "../components/TopMessage";
import Introduction from "../components/Introduction";
import CorporateDonation from "../components/CorporateDonation";
import EntorySchool from "../components/EntorySchool";
import SampleVuex from "../components/SampleVuex";

export default {
  // head: {
  //   link: [
  //     {
  //       rel: "stylesheet",
  //       href:
  //         "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/css/swiper.min.css"
  //     }
  //   ],
  //   script: [
  //     {
  //       type: "text/javascript",
  //       src:
  //         "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/js/swiper.min.js"
  //     }
  //   ]
  // },

  components: {
    TopVisual,
    Search,
    TopMessage,
    ActivityCard,
    ButtonMore,
    Introduction,
    CorporateDonation,
    EntorySchool,
    SampleVuex
  }
};
</script>

<style>
/* .allstyle {
  margin-left: 12px;
} */
</style>
