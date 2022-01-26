<template>
  <div class="w-100 bg-custom py-5 mt-5">
    <GuestNavigationBar></GuestNavigationBar>
    <router-view></router-view>
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