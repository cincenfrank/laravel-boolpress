<template>
  <div class="w-100 bg-custom py-5 mt-5">
    <GuestNavigationBar></GuestNavigationBar>
    <transition name="slide-fade" mode="out-in">
      <router-view></router-view>
    </transition>
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