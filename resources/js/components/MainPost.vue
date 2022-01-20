<template>
  <div class="mb-5 mt-3">
    <div class="row g-0">
      <div class="col-md-5">
        <img
          :src="postData['imageSrc']"
          class="img-fluid rounded w-100"
          alt="..."
          style="
            max-height: 300px;
            border-radius: 20px !important;
            object-fit: cover;
          "
        />
      </div>
      <div class="col-md-7 align-self-center">
        <div class="">
          <p class="text-left mb-0">
            <small class="text-muted"
              >Last update: {{ postData["updated_at"] }}</small
            >
          </p>
          <span class="badge badge-pill font-weight-bold badge-primary mb-3">{{
            postData["category"]
          }}</span>
          <h2 class="text-left">
            {{ postData["title"] }}
          </h2>
          <p class="text-left">{{ getShortContent }}</p>
          <a class="btn btn-outline-primary text-left" href="#" role="button"
            >Read More</a
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MainPost",
  props: {
    postData: Object,
  },
  computed: {
    getShortContent() {
      if (this.postData["content"].length > 300) {
        return this.postData["content"].substring(0, 300) + "...";
      } else {
        return this.postData["content"];
      }
    },
  },
};
</script>

<style>
</style>