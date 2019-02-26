<template>
  <div>
    <!-- <p>App.vue</p> -->
    <top-header></top-header>
    <router-view></router-view>
  </div>
</template>
 
<script>
import TopHeader from "./components/TopHeader";

export default {
  components: {
    TopHeader
  }
};
</script>

 
 <style lang="scss" scoped>
</style>


