<template>
  <div class="w-100">
    <GuestNavigationBar></GuestNavigationBar>
    <div class="container py-5">
      <h1>BoolPress Blog</h1>
      <h5 class="mb-5 text-black-50">The best blog in town!</h5>
      <!-- <h1 class="text-success">Vue Page</h1> -->
      <h1 v-if="!loaded">Loading</h1>
      <div v-if="initData && posts.length > 0">
        <h4>Suggested for you:</h4>

        <MainPost :postData="posts[randomIndex]"></MainPost>
        <h4 class="my-3">Category A</h4>
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
          <div class="col my-3" v-for="post in posts" :key="post.id">
            <SuggestedPost :postData="post"></SuggestedPost>
          </div>
        </div>
      </div>
      <div v-else>
        <h2>No Posts Available. We are working for you!</h2>
      </div>

      <!-- <h4 class="my-3">Category B</h4>
      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col d-md-none d-lg-block">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
      </div>
      <h4 class="my-3">Category C</h4>
      <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
        <div class="col d-md-none d-lg-block">
          <SuggestedPost :postData="postData"></SuggestedPost>
        </div>
    
    </div> -->
    </div>
  </div>
</template>

<script>
import GuestNavigationBar from "../components/GuestNavigationBar.vue";
import MainPost from "../components/MainPost.vue";
import SuggestedPost from "../components/SuggestedPost.vue";
import axios from "axios";
export default {
  name: "App",
  components: { GuestNavigationBar, MainPost, SuggestedPost },
  data() {
    return {
      posts: [],
      categories: [],
      postLoaded: false,
      categoryLoaded: false,
      initData: false,
    };
  },
  methods: {
    getPosts() {
      axios.get("/api/posts").then((resp) => {
        // console.log(resp.data);
        this.posts = resp.data;
        this.postLoaded = true;
        this.initializeData();
      });
    },
    getCategories() {
      axios.get("/api/categories").then((resp) => {
        this.categories = resp.data;
        this.categoryLoaded = true;
        this.initializeData();
      });
    },
    initializeData() {
      if (this.loaded) {
        this.posts.forEach((post) => {
          post.category = this.categories[post.category_id - 1]["name"];
        });
        this.initData = true;
      }
    },
    getRandomInt(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
    },
  },
  computed: {
    randomIndex() {
      return this.getRandomInt(0, this.posts.length);
    },
    loaded() {
      return this.postLoaded && this.categoryLoaded;
    },
  },
  mounted() {
    this.getPosts();
    this.getCategories();
  },
};
</script>

<style lang="scss" scoped>
</style>