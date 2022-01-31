<template>
  <div class="container">
    <h1 class="mb-2 text-white">{{ post.title }}</h1>
    <div class="d-flex">
      <div class="col-4">
        <img
          class="mb-2 w-100"
          :src="
            post.imageSrc.startsWith('http')
              ? post.imageSrc
              : `/storage/${post.imageSrc}`
          "
          alt="immagine"
        />
      </div>
      <div class="col-8 text-white">
        <p>{{ post.content }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Post",
  data() {
    return {
      post: {},
    };
  },
  mounted() {
    // console.log(`${this.$route.params.id}`);
    // console.log(`/api/posts/${this.$route.params.id}`);
    window.axios
      .get(`/api/posts/${this.$route.params.id}`)
      .then((response) => {
        this.post = response.data;
      })
      .catch((err) => {
        this.$router.push("about");
      });
  },
};
</script>

<style>
</style>