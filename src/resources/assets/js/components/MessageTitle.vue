<template>
  <section>
    <div>
      <h1>{{message}}</h1>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      message: "新規登録"
    };
  }
};
</script>

<style lang="scss" scoped>
section {
  //   margin-top: 100px;
  padding-top: 63px;
  top: 53px;
  //   background-color: #ce3939;
  div {
    // max-width: 100%;
    top: 63px;
    // background-color: #6693f5;

    h1 {
      background-color: #fffdf3;

      padding: 24px;
      text-align: center;
      line-height: 24px;
      padding-top: 24px;
      font-size: 1.6rem;
      letter-spacing: 0.3em;
    }
  }
}
</style>
