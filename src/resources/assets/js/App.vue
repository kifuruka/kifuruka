<template>
  <div>
    <top-header/>
    <router-view/>
    <top-footer/>
  </div>
</template>
 
<script>
import TopHeader from "./components/TopHeader";
import TopFooter from "./components/TopFooter";

export default {
  components: {
    TopHeader,
    TopFooter
  }
};
</script>

 
 <style lang="scss" scoped>
</style>


