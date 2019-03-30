<template>
  <section v-if="isSchoolStatus">
    <div class="container">
      <p>{{school.school_name}}の活動について</p>
    </div>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({
      school: "schools/getSchoolData",
      isSchoolStatus: "schools/isSchoolStatus"
    })
  }
};
</script>

<style lang="scss" scoped>
section {
  padding-top: 3%;
  padding-bottom: 3%;
  background-color: #fffdf3;
  .container {
    max-width: 1160px;
    p {
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
    }
  }
}
</style>