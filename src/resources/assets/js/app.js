
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import router from './router/';
import store from './store/';
import { sync } from 'vuex-router-sync';
import VueProgressiveImage from 'vue-progressive-image'

Vue.use(VueProgressiveImage, {
    blur: 30
});

sync(store, router);

const app = new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app');
