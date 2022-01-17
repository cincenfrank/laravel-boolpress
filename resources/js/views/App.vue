<template>
  <div class="w-100">
    <GuestNavigationBar></GuestNavigationBar>
    <div class="container py-5">
      <h1>BoolPress Blog</h1>
      <h5 class="mb-5 text-black-50">The best blog in town!</h5>
      <!-- <h1 class="text-success">Vue Page</h1> -->
      <h4>Suggested for you:</h4>
      <MainPost :postData="postData"></MainPost>
      <h4 class="my-3">Category A</h4>
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
      <h4 class="my-3">Category B</h4>
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
      </div>
    </div>
  </div>
</template>

<script>
import GuestNavigationBar from "../components/GuestNavigationBar.vue";
import MainPost from "../components/MainPost.vue";
import SuggestedPost from "../components/SuggestedPost.vue";
export default {
  name: "App",
  components: { GuestNavigationBar, MainPost, SuggestedPost },
  data() {
    return {
      postData: {
        title: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        updatedAt: "15/01/2022 16:35:45",
        imageSrc:
          "https://www.lamialiguria.it/images/2020/12/22/manarola_ag.jpg",
        description:
          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint .Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero magni dolorem sit temporibus enim esse explicabo excepturi quam nostrum eveniet vitae, dolore dolorum corrupti saepe modi laborum delectus autem sint",
      },
    };
  },
};
</script>

<style lang="scss" scoped>
</style>