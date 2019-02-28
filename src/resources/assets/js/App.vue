<template>
  <div>
    <!-- <p>App.vue</p> -->
    <top-header></top-header>
    <router-view></router-view>
    <top-footer></top-footer>
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


