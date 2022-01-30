<template>
  <div class="w-100">
    <div class="container p-0 vh-100 py-3">
      <div class="custom-layout-card">
        <GuestNavigationBar></GuestNavigationBar>
        <div class="flex-grow-1 overflow-hidden">
          <transition name="slide-fade" mode="out-in">
            <router-view class="mx-2 overflow-auto"></router-view>
          </transition>
        </div>
        <GuestFooter></GuestFooter>
      </div>
    </div>
  </div>
</template>

<script>
import GuestFooter from "../components/GuestFooter.vue";
import GuestNavigationBar from "../components/GuestNavigationBar.vue";
import MainPost from "../components/MainPost.vue";
import SuggestedPost from "../components/SuggestedPost.vue";
export default {
  name: "App",
  components: { GuestNavigationBar, MainPost, SuggestedPost, GuestFooter },
};
</script>

<style lang="scss" scoped>
</style>