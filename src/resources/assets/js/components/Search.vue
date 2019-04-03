<template>
  <section>
    <div v-if="isAllStatus" class="field has-addons">
      <div class="control find-frame">
        <input class="input" type="text" v-model="searchWord" placeholder="キーワードから探す">
      </div>
      <div class="control button-frame">
        <a class="button" @click="setSearchWord(searchWord)">検索</a>
      </div>
    </div>
    <table>
      <div class="container flex-flame">
        <!-- <div>{{activities.Data}}</div> -->
        <div v-show="isLength">
          <search-card
            v-for="activity in activities"
            :activity="activity"
            :key="activity.id"
            class="card-box"
          />
        </div>
      </div>
    </table>
    <!-- {{activities}} -->
  </section>
</template>

<script>
import SearchCard from "./SearchCard";
import { mapGetters, mapMutations } from "vuex";
export default {
  components: {
    SearchCard
  },
  data() {
    return {
      searchWord: "",
      isLength: true

      // viewCount: 0,
      // activities1: ""
    };
  },
  computed: {
    ...mapGetters({
      activities: "activity/fetchSearchData",
      isAllStatus: "activity/isAllStatus"
      // searchLength: "activity/searchLength"
    })
  },
  methods: {
    ...mapMutations({
      setSearchWord: "activity/setSearchWord"
    })
  }
};
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

.container {
  display: flex;
  margin: 0 auto;
  max-width: 1160px;
}
.card-box {
  width: 80%;
}
</style>
