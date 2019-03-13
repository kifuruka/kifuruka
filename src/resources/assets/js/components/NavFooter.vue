<template>
  <section>
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- コーポレート紹介 -->
          <div class="tile is-child is-4 test1">
            <div>
              <h1>きふるかについて</h1>
              <div>
                <router-link to="/" class="is-medium">
                  <strong>この寄付を選ぶ</strong>
                </router-link>
              </div>
              <div>
                <router-link to="/" class="is-medium">
                  <strong>この寄付を選ぶ</strong>
                </router-link>
              </div>
              <div>
                <router-link to="/" class="is-medium">
                  <strong>この寄付を選ぶ</strong>
                </router-link>
              </div>
              <div>
                <router-link to="/" class="is-medium">
                  <strong>この寄付を選ぶ</strong>
                </router-link>
              </div>
            </div>
          </div>
          <!-- ルート -->
          <div class="tile is-child is-4 test2">test2</div>
          <!-- sns -->
          <div class="tile is-child is-4 test3">test3
            <div class="sns-link-flame">
              <div class="media-content btn-flame">
                <a class="button is-medium fb-btn">
                  <strong>Facebook</strong>
                </a>
              </div>

              <div class="media-content btn-flame">
                <a class="button is-medium tw-btn">
                  <strong>Twitter</strong>
                </a>
              </div>

              <div class="media-content btn-flame">
                <a class="button is-medium li-btn">
                  <strong>LINE</strong>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="tile is-parent"></div>
      <div class="tile is-parent"></div>-->
    </div>

    <!-- <div class="tile is-ancestor">
        <div class="tile is-parent">

          <div class="tile is-child is-6 child-flame test1"></div>

          <div class="tile is-child is-6 child-flame test2">
   
          </div>
        </div>
    </div>-->
  </section>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
section {
  background-color: aquamarine;
  height: 320px;

  .container {
    max-width: 1160px;
    background-color: rgb(202, 154, 145);
  }
}

.sns-link-flame {
  margin-top: 40px;

  .fb-btn,
  .tw-btn,
  .li-btn {
    color: white;
    height: 4rem;
    font-weight: bold;
    font-size: 1rem;
    width: 90%;
  }

  .fb-btn {
    border-color: #3b5998;
    background-color: #3b5998;
  }
  .tw-btn {
    border-color: #55acee;
    background-color: #55acee;
  }
  .li-btn {
    border-color: #00b900;
    background-color: #00b900;
  }
}

.test1 {
  background-color: #aee7e9;
}
.test2 {
  background-color: #eaffb8;
}
.test3 {
  background-color: #7ea720;
}
</style>
