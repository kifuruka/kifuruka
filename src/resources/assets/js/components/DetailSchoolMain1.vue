<template>
  <section>
    <div class="container">
     <div><h2>学校の特長</h2></div>
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <div class="tile is-child is-5">
            <div class="school_text">
              <p>青山学院大学は、「青山学院教育方針」に立脚した、 神と人とに仕え社会に貢献する 「地の塩、世の光」としての教育研究共同体である。 本学は、地球規模の視野にもとづく正しい認識をもって 自ら問題を発見し解決する知恵と力をもつ人材を育成する。 それは、人類への奉仕をめざす自由で幅広い学問研究を通してなされる。 本学のすべての教員、職員、学生は、 相互の人格を尊重し、建学以来の伝統を重んじつつ、 おのおのの立場において、 時代の要請に応えうる大学の創出に努める。</p>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
          <div class="tile is-child is-6">
            <div class="img-flame">
              <router-link to="/">
                <img :src="SchoolCampus" class="u-img" alt="#">
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolCampus from "../../images/SchoolCampus/aoyama_campus1.jpg";
export default {
  data() {
    return {
      SchoolCampus
    };
  }
};
</script>

<style lang="scss" scoped>
section {
  .container {
    max-width: 1160px;
    margin-top: 80px;
    margin-bottom: 80px;
    h2 {
        font-size: 1.5rem;
        font-weight: bold;
        text-align: left;
        // padding-left:2%;
        padding-bottom: 2%;
    }
  }
}
.school_text{
    // padding-left:5%
}


@media screen and (max-width:768px) { 

section .container {
    margin-bottom: 0px;
}

}

</style>
