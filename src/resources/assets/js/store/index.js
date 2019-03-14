import Vue from 'vue';
import Vuex from 'vuex';
import auth from "./modules/auth";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({

    modules: {
        auth: auth
    },
    state: {
        activities: [],
        card: [],
        userId: 'aaaaa'
    },
    getters: {
        posts(state) {
            return state.posts
        },
        userId(state) {
            return state.userId
        },
        fetchAllData(state) {
            return state.activities
        }
    },
    mutations: {
        setPosts(state, ary) {
            state.posts = ary.concat();
        },
        imgPosts(state, payload) {
            state.posts = payload
        },
        setPostCards(state, payload) {
            state.activities = payload.concat();
            console.log(payload)
        }
    },
    actions: {
        fetchPosts(context) {
            axios.get('/json/test.json')
                .then(function (response) {
                    // console.log(response.data)
                    context.commit('setPosts', response.data)
                })
        },
        fetchPostTopVisual(context) {
            axios.get('/json/gazou.json')
                .then(function (response) {
                    // console.log(response.data)
                    context.commit('setPosts', response.data)
                })
        },
        fetchPostHomeCard(context) {
            const invocation = new XMLHttpRequest();
            const url = 'https://script.google.com/macros/s/AKfycbw-8I_PLL-HPxfukQyRJZxdw_XRVrnh3ERdN_2Ryxs-39hckOjc/exec';

            function callOtherDomain() {
                if (invocation) {
                    invocation.open('GET', url, true);
                    invocation.onreadystatechange = handler;
                    invocation.send();
                }
            }
            axios.get(url)
                .then(function (response) {
                    context.commit('setPostCards', response.data)
                }
                );




        }
    }


});

