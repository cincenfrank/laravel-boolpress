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
      <small class="text-muted"
        >Last update: {{ postData["updated_at"] }}</small
      >
      <span class="badge badge-pill font-weight-bold badge-primary mb-3">{{
        postData["category"]["name"]
      }}</span>
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