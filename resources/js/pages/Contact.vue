<template>
  <div>
    <h1>Contact Page</h1>
    <form
      v-if="!formSubmitted"
      class="row g-3 needs-validation text-white"
      novalidate
    >
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom01"
          value="Mark"
          v-model="mailObject.firstName"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom02"
          value="Otto"
          v-model="mailObject.lastName"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label"
          >Username</label
        >
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input
            type="text"
            class="form-control"
            id="validationCustomUsername"
            aria-describedby="inputGroupPrepend"
            v-model="mailObject.email"
            required
          />
          <div class="invalid-feedback">Please choose a username.</div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom03" class="form-label">Content</label>
        <textarea
          class="form-control"
          id="validationCustom03"
          v-model="mailObject.content"
          required
        ></textarea>
        <div class="invalid-feedback">Please provide a valid city.</div>
      </div>

      <div class="col-12">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="invalidCheck"
            required
          />
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
      </div>
      <div class="col-12">
        <button
          class="btn btn-primary"
          type="submit"
          @click.prevent="sendEmail"
        >
          Submit form
        </button>
      </div>
    </form>
    <div v-else>
      <h4 class="text-white">Message Sent!</h4>
      <small>We will contact you ASAP!</small>
      <div class="btn btn-outline-primary mt-5" @click="formSubmitted = false">
        Send another message
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mailObject: {
        firstName: "",
        lastName: "",
        email: "",
        content: "",
      },
      formSubmitted: false,
    };
  },
  methods: {
    sendEmail() {
      window.axios
        .post("/api/contacts", this.mailObject)
        .then((resp) => {
          this.formSubmitted = true;
        })
        .catch((error) => {
          // console.log(error);
        });
    },
  },
};
</script>

<style>
</style>