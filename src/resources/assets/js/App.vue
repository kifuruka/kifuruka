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
import http from "./services/http";

export default {
  components: {
    TopHeader,
    TopFooter
  },
  created() {
    http.init();
  },
  methods: {
    logout() {
      axios.get("/api/logout").then(res => {
        state.isLogin = false;
        this.$router.push({ path: "/" });
      });
    }
  }
};
</script>

 
 <style lang="scss" scoped>
</style>


