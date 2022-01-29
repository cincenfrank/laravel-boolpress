import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
import Contact from "./pages/Contact.vue";
import About from "./pages/About.vue";
import Post from "./pages/Post.vue";
import Category from "./pages/Category.vue";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact,
        },
        {
            path: "/post/:id",
            name: "post",
            component: Post,
        },
        {
            path: "/category/:id",
            name: "category",
            component: Category,
        },
    ],
});

export default router;
