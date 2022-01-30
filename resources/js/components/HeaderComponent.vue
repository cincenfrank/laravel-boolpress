<template>
  <div
    class="
      header-component
      w-100
      text-white
      top-0
      d-flex
      flex-column
      justify-content-center
      align-items-center
    "
  >
    <GuestNavigationBar class="w-100"></GuestNavigationBar>
    <h1>{{ $route.meta.title }}</h1>
    <h5 class="text-black-50 text-white-50">
      CinCenBlog - The best blog in town!
    </h5>
  </div>
</template>

<script>
import GuestNavigationBar from "./GuestNavigationBar.vue";
export default {
  components: { GuestNavigationBar },
  name: "HeaderComponent",
};
</script>

<style>
</style>