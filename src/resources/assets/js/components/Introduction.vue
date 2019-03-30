<template>
  <section>
    <div class="container">
      <div class="info-title">
        <h1>きふるかとは</h1>
      </div>
      <div class="info-flame">
        <p>
          スポーツや芸術、音楽、日本の未来を担う研究、地域と連携した社会貢献、そういった活動を行
          う学生を見た時、みなさんの中には応援したい気持ちが生まれてきませんか？
          <br>そういった応援したいと思う気持ちを持った方々と、実際に活動する学生や大学を寄付という形
          でつなぐプラットフォームを私たちは実現したいと考えております。きふるかを使うことで、寄付
          者は、活動団体を選択して寄付をすることができ、ダイレクトに活動を行う学生や学校の事業に、
          寄付という支援を届けることができます。
          <br>寄付を掲載する活動団体は、それぞれの活動に沿ったお礼の品を用意し、より寄付者と学生がお
          互いに協力し繋がることのできるコミュニティの実現と、既存の税控除制度を利用し、手続きをす
          ることで所得税や住民税の還付・控除が受けられるようにします。
          <br>学校寄附のあらたな世界をきふるかは提供いたします。
        </p>
      </div>

      <div class="story-flame">
        <div class="tile is-ancestor">
          <div class="tile is-vertical is-12 flame">
            <div class="tile">
              <div class="tile is-parent">
                <img :src="Message1" class="u-img" alt="#">
                <p class="u-img-p">
                  きふるかには、登録学校の活動ご
                  との寄付が掲載されています。
                  寄付者は、自分の卒業校の活動を
                  常に検索することができ、卒業校
                  だけでなく自分の応援したい活動
                  を選び寄付することができます。
                </p>
              </div>

              <div class="tile is-parent">
                <img :src="Message2" class="u-img" alt="#">
                <p class="u-img-p">
                  寄付者が行った寄付は、各学校を
                  経由して、学生が行う活動団体の
                  支援のために使われる寄付として
                  直接届きます。これにより寄付者
                  が応援したい活動にダイレクトに
                  寄付を届けることが可能となりま
                  す。
                </p>
              </div>

              <div class="tile is-parent">
                <img :src="Message3" class="u-img" alt="#">
                <p class="u-img-p">
                  寄付を受け取った各団体は、それ
                  ぞれ、活動に沿ったお礼を寄付者
                  に届けます。こうすることで、き
                  ふるかを通して、寄付者と学生そ
                  れぞれがつながることができます。
                  また、寄付を行うことで、学校か
                  らの寄付控除を受けられます。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="story-flame">
        <div class="tile is-ancestor">
          <div class="tile is-vertical is-12 flame">
            <div class="tile">
              <div class="tile is-parent">
                <p class="u-img-p-pc">
                  きふるかには、登録学校の活動ご
                  との寄付が掲載されています。
                  寄付者は、自分の卒業校の活動を
                  常に検索することができ、卒業校
                  だけでなく自分の応援したい活動
                  を選び寄付することができます。
                </p>
              </div>

              <div class="tile is-parent">
                <p class="u-img-p-pc">
                  寄付者が行った寄付は、各学校を
                  経由して、学生が行う活動団体の
                  支援のために使われる寄付として
                  直接届きます。これにより寄付者
                  が応援したい活動にダイレクトに
                  寄付を届けることが可能となりま
                  す。
                </p>
              </div>

              <div class="tile is-parent">
                <p class="u-img-p-pc">
                  寄付を受け取った各団体は、それ
                  ぞれ、活動に沿ったお礼を寄付者
                  に届けます。こうすることで、き
                  ふるかを通して、寄付者と学生そ
                  れぞれがつながることができます。
                  また、寄付を行うことで、学校か
                  らの寄付控除を受けられます。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import Message1 from "../../../../public/images/topintro/message1.png";
import Message2 from "../../../../public/images/topintro/message2.png";
import Message3 from "../../../../public/images/topintro/message3.png";
export default {
  data() {
    return {
      Message1,
      Message2,
      Message3
    };
  }
};
</script>

<style  lang="scss" scoped >
section {
  // background-color: aqua;
  margin-bottom: 80px;
  margin: 0 5%;
  .container {
    // background-color: #212121;
    max-width: 1160px;

    .info-title {
      max-width: 1120px;
      margin: 0 auto;
      margin-top: 56px;
      font-size: 2rem;
      h1 {
        text-align: center;
      }
    }
    .info-flame {
      max-width: 1120px;
      margin: 0 auto;
      margin-top: 32px;
      font-size: 1.4rem;
    }
  }
  .story-flame {
    // max-width: 1120px;
    margin-top: 32px;
    font-size: 1.4rem;
    div {
      .flame {
        margin: 0 auto;
        div {
          .u-img {
            width: 100%;
            height: 100% !important;
          }
        }
      }
    }
  }
.u-img-p{
  display: none;
}
@media screen and (max-width:768px) { 
  .u-img-p{
    display: block;
  }
  .u-img-p-pc{
    display: none;
  }
}
}
</style>