<template>
  <section>
    <!-- <div class="container" > -->
    <div class="container" v-on:click="fireParentEvent">
      <!-- <router-link to="/" class="button is-medium custom-btn"> -->
        <strong><span class="button is-medium custom-btn">{{btn_name}}</span></strong>
      <!-- </router-link> -->
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      btn_name: "もっと見る"
    };
  },
  methods: {
    fireParentEvent() {
      console.log("console_fireParentEvent");
      this.$emit('click');
    }
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

    .facebook {
      background-color: #3b5998;
      color: white;
      width: 90%;
      border-color: #3b5998;
    }
  }
}
</style>
