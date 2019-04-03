<template>
  <div class="allstyle">
    <top-visual/>
    <search/>
    <activity-card/>
    <button-more/>
    <entry-school/>
    <top-message/>
    <introduction/>
    <corporate-donation/>
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
import EntrySchool from "../components/EntrySchool";
import SampleVuex from "../components/SampleVuex";
import { mapActions } from "vuex";

export default {
  components: {
    TopVisual,
    Search,
    TopMessage,
    ActivityCard,
    ButtonMore,
    Introduction,
    CorporateDonation,
    EntrySchool
  },
  created() {
    this.getAll();
  },
  methods: {
    ...mapActions({
      getAllActivities: "activity/getAllActivities"
    }),
    getAll() {
      this.getAllActivities();
    }
  }
};
</script>

<style>
/* .allstyle {
  margin-left: 12px;
} */
</style>
