import Vue from 'vue';
import Vuex from 'vuex';
import auth from "./modules/auth";
import alert from "./modules/alert";

import axios from "axios";
import http from '../services/http'
import util from '../utils/util';

Vue.use(Vuex);

export default new Vuex.Store({

    modules: {
        auth: auth,
        alert: alert
    },

    state: {
        schoolData: [],
        activities: [],
        card: [],
        user: {},
        token: localStorage.getItem(util.JWT_TOKEN) || '',
        status: '',

    },
    getters: {
        schoolData(state) {
            console.log(state.schoolData.data, "state")
            return state.schoolData.data

        },
        getloginuser(state) {
            console.log(state.user.data, ':userstate')
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
            console.log(payload, 'Route')
            // state.schoolData = payload.concat()
            state.schoolData = payload
            // },
        },
        loginMutations(state, payload) {
            console.log(payload, 'loginMutations')
            // state.schoolData = payload.concat()
            state.user = payload
            // },
        }
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


        // ＜練習１＞別ファイルのJSONから学校の情報を取ってくる

        // async fetchSchoolData({ commit }) {
        //     const { data } = await axios.get('/json/school.json')
        //     commit('setShoolData', data)
        // },


        // ＜練習２＞そのまま、Laravelのコントローラー経由でMySQLデータをを取ってくる

        // async fetchSchoolData({ commit }) {
        //     const { data } = await axios.get('/school')
        //     console.log(data);
        //     commit('setShoolData', data)
        // },


        fetchSchoolData({ commit }) {
            // console.log("koko")
            http.get('/school', res => {
                // console.log(res.data,"kokokoko");
                commit('setShoolData', res.data)
            }, null)

        },


        async loginAction({ commit }) {

            await http.post('/auth/login', res => {
                console.log(res.data);
                commit('loginMutations', res.data)
            }, null)

        },



    }


});

