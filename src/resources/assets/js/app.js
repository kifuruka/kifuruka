require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import store from './store/';
import router from './router/';

// import { sync } from 'vuex-router-sync';
// import VueProgressiveImage from 'vue-progressive-image'

// Vue.use(VueProgressiveImage, {
//     blur: 30
// });

window.state = store.state;

Vue.component('app', require('./App.vue'));

// sync(store, router);

const app = new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app');

