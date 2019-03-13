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
        posts: [],
        userId: 'aaaaa'
    },
    getters: {
        posts(state) {
            return state.posts
        },
        userId(state) {
            return state.userId
        }
    },

    mutations: {
        setPosts(state, ary) {
            state.posts = ary;
        }
        ,
        imgPosts(state, ary) {
            state.posts = ary
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
                    console.log(response.data)
                    context.commit('setPosts', response.data)
                })
        }
    }


});

