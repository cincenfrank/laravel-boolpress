<template>
  <div class="w-100">
    <GuestNavigationBar></GuestNavigationBar>
    <div class="container py-5">
      <h1>BoolPress Blog</h1>
      <h5 class="mb-5 text-black-50">The best blog in town!</h5>
      <!-- <h1 class="text-success">Vue Page</h1> -->
      <h4>Suggested for you:</h4>
      <MainPost></MainPost>
      <h4>Category A</h4>
      <div class="row mb-5 mt-3">
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
      </div>
      <h4>Category B</h4>
      <div class="row mb-5 mt-3">
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
      </div>
      <h4>Category C</h4>
      <div class="row mb-5 mt-3">
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
        </div>
        <div class="col-4">
          <SuggestedPost></SuggestedPost>
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
};
</script>

<style lang="scss" scoped>
</style>