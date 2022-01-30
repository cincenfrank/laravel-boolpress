<template>
  <nav
    class="
      navbar navbar-dark
      bg-transparent
      navbar-expand-lg navbar-light
      bg-light
    "
  >
    <div class="container">
      <a class="navbar-brand" href="#">BoolPress</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarScroll"
        aria-controls="navbarScroll"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarScroll"
      >
        <ul
          class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
          style="--bs-scroll-height: 100px"
        >
          <li class="nav-item">
            <router-link
              class="nav-link"
              aria-current="page"
              to="/"
              exact-active-class="active"
              >Home</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/contact" active-class="active"
              >Contacts</router-link
            >
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about" active-class="active"
              >About Us</router-link
            >
          </li>
        </ul>
        <form class="d-flex">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success ml-2" type="submit">
            Search
          </button>
        </form>
        <ul class="navbar-nav ms-4 my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarScrollingDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              More
            </a>
            <ul
              class="dropdown-menu dropdown-menu-custom"
              aria-labelledby="navbarScrollingDropdown"
            >
              <li><a class="dropdown-item" href="/admin">Admin Page</a></li>
              <!-- <li><a class="dropdown-item" href="">Another action</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "GuestNavigationBar",
  data() {
    return {};
  },
};
</script>

<style>
</style>