<template>
  <div>
    <top-visual/>
    <search/>
    <top-message/>
    <activity-card/>
    <entory-school/>
  </div>
</template>

<script>
import TopVisual from "../components/TopVisual";
import Search from "../components/Search";
import TopMessage from "../components/TopMessage";
import ActivityCard from "../components/ActivityCard";
import EntorySchool from "../components/EntorySchool";

export default {
  components: {
    TopVisual,
    Search,
    TopMessage,
    ActivityCard,
    EntorySchool
  }
};
</script>