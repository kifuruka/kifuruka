<template>
  <section>
    <div>
      <h1>{{message}}</h1>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    message: String
  }
};
</script>

<style lang="scss" scoped>
section {
  //   margin-top: 100px;
  padding-top: 63px;
  top: 53px;
  div {
    // max-width: 100%;
    top: 63px;

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
