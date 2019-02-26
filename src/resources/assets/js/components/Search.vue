<template>
  <section>
    <div class="field has-addons">
      <div class="control find-frame">
        <input class="input" type="text" placeholder="キーワードから探す">
      </div>
      <div class="control button-frame">
        <a class="button">検索</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
section {
  max-width: 1160px;
  margin: 0 auto;
  margin-top: 56px;

  .has-addons {
    max-width: 560px;
    height: 56px;
    margin: 0 auto;

    .find-frame {
      width: 448px;

      input {
        height: 56px;
        font-size: 1.5rem;
        background-color: #f2f2f2;
      }
    }
    .button-frame a {
      width: 112px;
      height: 56px;
      background-color: #ffe035;
      font-size: 1.5rem;
      color: #222222;
    }
  }
}
</style>
