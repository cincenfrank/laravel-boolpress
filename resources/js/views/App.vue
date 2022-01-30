<template>
  <!-- <div class=""> -->
  <div class="container vh-100 py-3">
    <div class="custom-layout-card bg-dark">
      <!-- <div class="position-relative bg-black"> -->
      <!-- <img
          class="w-100 title-image"
          src=""
          alt=""
        /> -->
      <HeaderComponent></HeaderComponent>
      <!-- </div> -->
      <div class="flex-grow-1 py-2 overflow-hidden container">
        <div class="row h-100">
          <div class="col h-100 overflow-auto">
            <transition name="slide-fade" mode="out-in">
              <router-view class=""></router-view>
            </transition>
          </div>
          <div class="col-2 border-start border-primary">
            <CategoryList title="Categories"></CategoryList>
          </div>
        </div>
      </div>
      <GuestFooter></GuestFooter>
    </div>
  </div>
  <!-- </div> -->
</template>

<script>
import CategoryList from "../components/CategoryList.vue";
import GuestFooter from "../components/GuestFooter.vue";
import HeaderComponent from "../components/HeaderComponent.vue";
import MainPost from "../components/MainPost.vue";
import SuggestedPost from "../components/SuggestedPost.vue";
export default {
  name: "App",
  components: {
    MainPost,
    SuggestedPost,
    GuestFooter,
    CategoryList,
    HeaderComponent,
  },
};
</script>

<style lang="scss" scoped>
</style>