import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/TheTop';
import Register from '../pages/Register';
import RegisterConfirmation from '../pages/RegisterConfirmation';
import Login from '../pages/Login';
import Donation from '../pages/Donation';
import DetailSchool from '../pages/DetailSchool';
import test from '../pages/test';

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
        path: '/register/confirmation',
        name: 'registerConfirmation',
        component: RegisterConfirmation
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/donation',
        component: Donation
    },
    {
        path: '/detailschool/:id',
        // name: 'DetailSchool',
        component: DetailSchool,
        props: route => ({
            id: Number(route.params.id)
        })
    },

    {
        path: '/test',
        // path: '/user',
        // component: user, meta: { requiresAuth: true }
        component: test,
        // meta: { requiresAuth: true }
    },


];

// const router = new VueRouter({
//     mode: 'history',
//     routes,
//     scrollBehavior(to, from, savedPosition) {
//         if (savedPosition) {
//             return savedPosition
//         } else {
//             return { x: 0, y: 0 }
//         }
//     }
// });


const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (state.isLogin === false) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next();
    }
});

export default router;