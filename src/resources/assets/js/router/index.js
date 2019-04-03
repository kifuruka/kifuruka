import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/TheTop';
import Register from '../pages/Register';
import RegisterConfirmation from '../pages/RegisterConfirmation';
import Login from '../pages/Login';
import Activity from '../pages/Activity';
import DetailSchool from '../pages/DetailSchool';
import updata from '../pages/Updata';
import mypage from '../pages/Mypage';

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
        path: '/activity/:id',
        component: Activity,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path: '/detailschool/:id',
        name: 'DetailSchool',
        component: DetailSchool,
        props: route => ({
            id: Number(route.params.id)
        })
    },

    {
        path: '/updata',
        component: updata,
        name: 'updata'
    },
    {
        path: '/mypage',
        component: mypage,
        name: 'mypage',
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