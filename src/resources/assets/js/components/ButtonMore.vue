<template>
  <section>
    <div class="container">
      <router-link to="/" class="button is-medium custom-btn">
        <strong>{{btn_name}}</strong>
      </router-link>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      btn_name: "もっと見る"
    };
  }
};
</script>


<style lang="scss" scoped >
section {
  padding-top: 40px;
  // background-color: red;
  .container {
    max-width: 1160px;
    // background-color: blue;
    // margin: 0 auto;
    text-align: center;
    .custom-btn {
      background-color: #ffe035;
      color: white;
      border-radius: 2em;
      width: 6.3em;
      border-color: #ffe035;
    }
  }
}
</style>
