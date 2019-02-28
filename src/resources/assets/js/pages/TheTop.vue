<template>
  <div>
    <top-visual/>
    <search/>
    <top-message/>
    <introduction/>
    <corporate-donation/>
  </div>
</template>

<script>
import TopVisual from "../components/TopVisual";
import Search from "../components/Search";
import TopMessage from "../components/TopMessage";
import Introduction from "../components/Introduction";
import CorporateDonation from "../components/CorporateDonation";

export default {
  components: {
    TopVisual,
    Search,
    TopMessage,
    Introduction,
    CorporateDonation
  }
};
</script>