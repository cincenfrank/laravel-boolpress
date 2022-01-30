<template>
  <div class="">
    <h1>BoolPress Blog</h1>
    <h5 class="mb-5 text-black-50">The best blog in town!</h5>
    <h1 v-if="!loaded">Loading</h1>
    <div v-else-if="initData && posts.length > 0">
      <div class="row">
        <div class="col">
          <h4>Suggested for you:</h4>

          <MainPost :postData="posts[randomIndex]"></MainPost>

          <h4 class="my-3">Posts:</h4>
          <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2">
            <div class="col my-3" v-for="post in posts" :key="post.id">
              <SuggestedPost :postData="post"></SuggestedPost>
            </div>
          </div>
        </div>

        <div class="col-2">
          <div class="card justify-content-start">
            <div class="card-body overflow-hidden">
              <h4 class="card-title">Categories</h4>
              <!-- <p class="card-text">Text</p> -->
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item"
                  v-for="category in categories"
                  :key="'category-' + category.id"
                >
                  <router-link :to="`category/${category.id}`">{{
                    category.name
                  }}</router-link>
                </li>
              </ul>
            </div>
          </div>

          <div class="card justify-content-start my-3">
            <div class="card-body overflow-hidden">
              <h4 class="card-title">Tags</h4>
              <!-- <p class="card-text">Text</p> -->
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item"
                  v-for="category in categories"
                  :key="'category-' + category.id"
                >
                  {{ category.name }}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button
          class="btn btn-outline-info mx-2"
          :class="!currentPreviousPage ? 'disabled' : ''"
          @click="onPreviousPage"
        >
          Prev.
        </button>
        <button
          class="btn btn-outline-info mx-2"
          :class="!currentNextPage ? 'disabled' : ''"
          @click="onNextPage"
        >
          Next
        </button>
      </div>
    </div>
    <div v-else>
      <h2>No Posts Available. We are working for you!</h2>
    </div>
  </div>
</template>

<script>
import MainPost from "../components/MainPost.vue";
import SuggestedPost from "../components/SuggestedPost.vue";
export default {
  components: { MainPost, SuggestedPost },
  name: "Home",
  data() {
    return {
      posts: [],
      categories: [],
      postLoaded: false,
      categoryLoaded: false,
      initData: false,
      currentPostsPage: 1,
      currentNextPage: null,
      currentPreviousPage: null,
    };
  },
  methods: {
    getPosts() {
      this.postLoaded = false;
      window.axios
        .get(`/api/posts?page=${this.currentPostsPage}`)
        .then((resp) => {
          console.log(resp.data);
          this.posts = resp.data.data;
          this.currentPreviousPage =
            resp.data.current_page === 1 ? null : resp.data.current_page - 1;
          this.currentNextPage =
            resp.data.current_page < resp.data.last_page
              ? resp.data.current_page + 1
              : null;
          this.postLoaded = true;
          this.initializeData();
        });
    },
    onNextPage() {
      if (this.currentNextPage) {
        this.currentPostsPage = this.currentNextPage;
        this.getPosts();
      }
    },
    onPreviousPage() {
      if (this.currentPreviousPage) {
        this.currentPostsPage = this.currentPreviousPage;
        this.getPosts();
      }
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
        //   this.posts.forEach((post) => {
        //     post.category = this.categories[post.category_id - 1]["name"];
        //   });
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

<style>
</style>