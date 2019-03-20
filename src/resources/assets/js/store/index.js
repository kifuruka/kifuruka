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
        schoolData: [],
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
            console.log(payload, 'Route')
            // state.schoolData = payload.concat()
            state.schoolData = payload
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

        // 学校の情報を取ってくる（SchoolSubInfo部分）
        // async fetchSchoolData({ commit }) {
        //     const { data } = await axios.get('/json/school.json')
        //     commit('setShoolData', data)
        // },


        // index.js
        // async fetchSchoolData({ commit }) {
        //     const { data } = await axios.get('/school')
        //     console.log(data);
        //     commit('setShoolData', data)
        // },

        fetchSchoolData({ commit }) {
            http.get('/school', res => {
                commit('setShoolData', res.data)
            }, null)

        },



    }


});

