import Vue from 'vue';
import VueRouter from 'vue-router';
import Top from '../pages/TheTop';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Donation from '../pages/Donation';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: Top
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/donation',
        component: Donation
    },

];

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }
});

export default router;