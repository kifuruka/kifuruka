<template>
  <section>
    <button @click="addPosts">addボタン</button>
    <button @click="getPosts">getボタン</button>
    <!-- <button @click="fetchPosts">ボタン</button> -->
    <button @click="fetch">ボタン</button>
  </section>
</template>

<script>
import { mapGetters, mapMutations, mapActions } from "vuex";
export default {
  // コンピューテッドは参照のみ
  computed: {
    ...mapGetters(["posts", "userId"])
  },

  mounted() {
    console.log(this.userId);
  },

  // メソッドは関数定義ができる
  methods: {
    // ...はスプレットオペレーター
    ...mapActions(["fetchPosts"]),
    ...mapMutations(["setPosts"]),

    addPosts() {
      console.log(this.posts);
      // this.$store.commit("setPosts", [1, 2, 3, 4, 55]);
      // コミットはミューテーションへ
      this.setPosts([1, 2, 3, 4, 55]);
    },
    getPosts() {
      console.log(this.posts);
    },
    fetch() {
      // this.$store.dispatch("fetchPosts");
      // ディスパッチはアクションズへ

      this.fetchPosts();
    }
  }
};
</script>

<style>
</style>
