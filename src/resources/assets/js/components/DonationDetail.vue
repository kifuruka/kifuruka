<template>
  <section>
    <div class="container">
      <div class="donation-title">
        <h1>活動タイトル</h1>
      </div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-7">
            <div class="donaition-img-flame">
              <img :src="DonationImage" class="u-img" alt="#">
            </div>
            <div class="donaition-text-flame">
              <h1>お礼品について</h1>
              <p>
                これはサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。
                青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。青山学院大学の活動の「箱根駅伝制覇！」のサンプルテキストです。
              </p>
            </div>
          </div>
          <div class="tile is-child is-5">
            <div>
              <h1>寄付金額</h1>
              <p>
                <span>{{ price }}</span>円
              </p>

              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import DonationImage from "../../images/donation/d_kin_rag_top.jpg";
export default {
  data() {
    return {
      DonationImage,
      price: "5,000"
    };
  }
};
</script>

<style lang="scss" scoped>
section {
  padding-top: 63px;
  background-color: #fffdf3;

  .container {
    max-width: 1160px;
    background-color: rgb(121, 121, 212);

    .donation-title {
      margin-top: 32px;

      h1 {
        font-weight: bold;
        font-size: 2rem;
      }
    }
    .donaition-text-flame {
      margin-top: 16px;
      font-size: 1.3rem;

      h1 {
        font-size: 2rem;
        font-weight: bold;
        padding-bottom: 24px;
      }

      p {
        padding-bottom: 32px;
      }
    }

    .donaition-img-flame {
      margin-top: 32px;
    }
  }
}
</style>


