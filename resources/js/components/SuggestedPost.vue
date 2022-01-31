
<template>
  <div class="mt-3 custom-component-bg p-3 h-100">
    <div class="h-100 d-flex flex-column align-items-start">
      <img
        :src="
          postData['imageSrc'].startsWith('http')
            ? postData['imageSrc']
            : `/storage/${postData['imageSrc']}`
        "
        class="img-fluid rounded w-100"
        alt="..."
        style="
          max-height: 200px;
          border-radius: 10px !important;
          object-fit: cover;
        "
      />

      <p class="text-left mt-2">
        <small class="text-muted">Last update: {{ formattedData }}</small>

        <span class="badge rounded-pill bg-primary font-weight-bold mb-3">{{
          postData["category"]["name"]
        }}</span>
      </p>
      <h4 class="text-left text-light flex-grow-1">
        {{ postData["title"] }}
      </h4>
      <router-link
        class="btn btn-outline-info text-left"
        :to="`/post/${postData.uuid}`"
        role="button"
        >Read More</router-link
      >
    </div>
  </div>
</template>

<script>
var dayjs = require("dayjs");
export default {
  name: "SuggestedPost",
  props: { postData: Object },
  computed: {
    formattedData() {
      return dayjs(this.postData["updated_at"]).format("DD/MM/YY HH:mm:ss");
    },
  },
};
</script>

<style>
</style>