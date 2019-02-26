<template>
  <div>
    <top-visual/>
    <search/>
    <top-message/>
  </div>
</template>

<script>
import TopVisual from "../components/TopVisual";
import Search from "../components/Search";
import TopMessage from "../components/TopMessage";

export default {
  components: {
    TopVisual,
    Search,
    TopMessage
  }
};
</script>