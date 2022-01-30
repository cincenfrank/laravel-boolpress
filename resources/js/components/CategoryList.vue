<template>
  <div class="card justify-content-start">
    <div class="card-body overflow-hidden">
      <h4 class="card-title">{{ title }}</h4>
      <ul class="list-group list-group-flush">
        <li
          class="list-group-item"
          v-for="category in categories"
          :key="'category-' + category.id"
        >
          <router-link :to="`/category/${category.id}`">{{
            category.name
          }}</router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoryList",
  data() {
    return {
      categories: [],
      categoryLoaded: false,
    };
  },
  methods: {
    getCategories() {
      axios.get("/api/categories").then((resp) => {
        this.categories = resp.data;
        this.categoryLoaded = true;
        // this.initializeData();
      });
    },
  },
  mounted() {
    this.getCategories();
  },
  props: {
    title: String,
  },
};
</script>

<style>
</style>