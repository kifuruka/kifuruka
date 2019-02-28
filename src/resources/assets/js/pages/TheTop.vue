<template>
  <div>
    <top-visual/>
    <search/>
    <activity-card/>
    <button-more/>
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

export default {
  components: {
    TopVisual,
    Search,
    TopMessage,
    ActivityCard,
    ButtonMore,
    Introduction,
    CorporateDonation
  }
};
</script>