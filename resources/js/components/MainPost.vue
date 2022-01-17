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
          <p class="text-left">
            <small class="text-muted"
              >Last update: {{ postData["updatedAt"] }}</small
            >
          </p>
          <h2 class="text-left">
            {{ postData["title"] }}
          </h2>
          <p class="text-left">{{ getShortDescription }}</p>
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
    getShortDescription() {
      if (this.postData["description"].length > 300) {
        return this.postData["description"].substring(0, 300) + "...";
      } else {
        return this.postData["description"];
      }
    },
  },
};
</script>

<style>
</style>