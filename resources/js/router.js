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
            meta: {
                title: "Home Page",
            },
        },
        {
            path: "/about",
            name: "about",
            component: About,
            meta: {
                title: "About Us",
            },
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact,
            meta: {
                title: "Contact Us",
            },
        },
        {
            path: "/post/:id",
            name: "post",
            component: Post,
            meta: {
                title: "Read Post",
            },
        },
        {
            path: "/category/:id",
            name: "category",
            component: Category,
            meta: {
                title: "Category",
            },
        },
    ],
});

export default router;
