import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter);
const routes = [
    { path: '/', component: () => import('../views/Home.vue') },
    { path: '/posts', component: () => import('../views/Posts.vue') },
    { path: '/post/add', component: () => import('../views/addPost.vue') },
    { path: '/post/view/:id', name: 'show_post', component: () => import('../views/Post.vue') },
    { path: '*', redirect: '/' },

]

const router = new VueRouter({
    mode: 'history',
    routes
});


export default router;