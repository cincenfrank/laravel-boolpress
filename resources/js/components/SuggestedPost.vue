<template>
  <div class="">
    <img
      :src="postData['imageSrc']"
      class="img-fluid rounded w-100"
      alt="..."
      style="
        max-height: 200px;
        border-radius: 10px !important;
        object-fit: cover;
      "
    />
    <p class="text-left">
      <small class="text-muted">Last update: {{ postData["updatedAt"] }}</small>
    </p>
    <h4 class="text-left">
      {{ postData["title"] }}
    </h4>
    <a class="btn btn-outline-primary text-left" href="#" role="button"
      >Read More</a
    >
  </div>
</template>

<script>
export default {
  name: "SuggestedPost",
  props: { postData: Object },
};
</script>

<style>
</style>