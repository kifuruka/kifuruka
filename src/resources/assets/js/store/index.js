import Vue from 'vue';
import Vuex from 'vuex';
import auth from "./modules/auth";
import axios from "axios";
import http from '../services/http'

Vue.use(Vuex);

export default new Vuex.Store({

    modules: {
        auth: auth
    },

    state: {
        schoolData: null,
        activities: [],
        card: [],
        userId: 'aaaaa'
    },
    getters: {
        schoolData(state) {
            return state.schoolData

        }
        // posts(state) {
        //     return state.posts
        // },
        // userId(state) {
        //     return state.userId
        // },
        // fetchAllData(state) {
        //     return state.activities
        // }
    },
    mutations: {

        setShoolData(state, payload) {
            // console.log(payload, 'mute')
            state.schoolData = payload.concat()
        },
        // setPosts(state, ary) {
        //     state.posts = ary.concat();
        // },
        // imgPosts(state, payload) {
        //     state.posts = payload
        // },
        // setPostCards(state, payload) {
        //     state.activities = payload.concat();
        //     // console.log(payload)
        // }
    },
    actions: {
        // 学校の情報を取ってくる（SchoolSubInfo部分）
        async fetchSchoolData({ commit }) {
            const { data } = await axios.get('/json/school.json')
            // console.log(data, 'data')
            commit('setShoolData', data)
        },


        // fetchPosts(context) {
        //     axios.get('/json/test.json')
        //         .then(function (response) {
        //             // console.log(response.data)
        //             context.commit('setPosts', response.data)
        //         })
        // },
        // async fetchPostTopVisual(context) {
        //     console.log("yobidais")
        //     const { data } = await axios.get('/json/gazou.json')
        //     console.log(data, 'data')

        // },
        // fetchPostHomeCard(context) {
        //     console.log("fetchPostHomeCardが動く");
        //     http.get('/school.json')
        //         .then(function (response) {
        //             context.commit('setPostCards', response.data)
        //             console.log(response)
        //         });

        // }

        // fetchPostHomeCard({ commit }, payload) {
        //     console.log("fetchPostHomeCardが動く");

        //     return new Promise(resolve => {

        //         http.get('./school.json', payload, res => {
        //             commit('setPostCards', res.data)
        //             console.log("レスポンス：" + response)
        //             resolve()
        //         },
        //             e => {
        //                 alert('Emailを正しく入力してください。')
        //             })

        //     })

        // }
    }


});

