<template>
  <section>
    <div class="container">
      <div class="tile is-ancestor">
        <div class="tile is-parent">
          <!-- <div class="tile is-child is-1"></div> -->
          <div class="tile is-child is-4">
            <div class="school-right-flame">
              <img :src="SchoolLogo" class="logo_img" alt="#">
            </div>
            <div class="school_name">
              <span class="under">青山学院大学</span>
            </div>
          </div>
          <div class="tile is-child is-1"></div>
          <div class="tile is-child is-7">
            <div class="img-flame img-flame-sp">
              <router-link to="/">
                <img :src="SchoolCampus" class="u-img" alt="#">
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="tile is-child is-12">
            <p>青山学院大学は、「青山学院教育方針」に立脚した、 神と人とに仕え社会に貢献する 「地の塩、世の光」としての教育研究共同体である。 本学は、地球規模の視野にもとづく正しい認識をもって 自ら問題を発見し解決する知恵と力をもつ人材を育成する。 それは、人類への奉仕をめざす自由で幅広い学問研究を通してなされる。 本学のすべての教員、職員、学生は、 相互の人格を尊重し、建学以来の伝統を重んじつつ、 おのおのの立場において、 時代の要請に応えうる大学の創出に努める。</p>
      </div>
    </div>
  </section>
</template>

<script>
import SchoolLogo from "../../images/schoolLogo/aoyama_logo.png";
import SchoolCampus from "../../images/SchoolCampus/aoyama_campus.jpg";
export default {
  data() {
    return {
      SchoolLogo,
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
    margin-bottom: 160px;
  }
}

.school-right-flame {
  //   background-color: aqua;
  padding: 5%;

//   h1 {
//     background: linear-gradient(transparent 90%, #ffe035 70%);
//     font-size: 2.5rem;
//     font-weight: bold;
//     text-align: left;
//     padding-bottom: 16px;
//   }

  p {
    font-size: 1.8rem;
  }
  div {
    text-align: right;
    a {
      font-weight: bold;
      font-size: 1.6rem;
    }
  }
}
.school_name{
    padding-top:40%; 
    padding-left:5%
}

.btn-flame {
  text-align: center;
  margin-top: 16px;

  .custom-btn {
    background-color: #ffe035;
    color: #333333;
    height: 4rem;
    font-weight: bold;
    font-size: 1.6rem;
    width: 100%;
    border-color: #ffe035;
  }
}

.img-flame {
  padding: 24px;
}

img{
  vertical-align: bottom;
}

.logo_img{
    padding-top:40%; 
}

.under{
    background: linear-gradient(transparent 70%, #ffe035 70%);
    font-size: 2.5rem;
    font-weight: bold;
    text-align: left;
}


@media screen and (max-width:768px) { 

section .container {
    margin-bottom: 80px;
}

.school-right-flame {
    padding: 5%;
    display: none;
}

.school_name {
    padding-top: 0%;
    padding-left: 5%;
}
.img-flame {
    padding: 0px;
}
.img-flame-sp {
    padding-top: 5%;
}
.is-child p{
  margin: 0 5%;
}

}

</style>
