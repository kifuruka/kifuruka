import Vue from 'vue';
import Vuex from 'vuex';

// 参照
import http from '../services/http'
import axios from 'axios'
import types from './mutation-types'

// moudules
import auth from "./modules/auth";
import alert from "./modules/alert";
import schools from "./modules/schools";
import activity from "./modules/activity";

Vue.use(Vuex);

const modules = {
    auth: auth,
    alert: alert,
    schools: schools,
    activity: activity
}

<<<<<<< HEAD
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
=======
export default new Vuex.Store({
    modules: modules,
})


// ----------------------------
// 古い書き方
// ----------------------------


// export default new Vuex.Store({

//     modules: {
//         // auth: auth,
//         alert: alert
//     },

//     state: {
//         // schoolsData: [],
//         // schoolData: [2],
//         activities: [],
//         card: [],
//         // user: {},
//         // token: localStorage.getItem(util.JWT_TOKEN) || '',
//         // status: '',
//         // isLogin: true
//         // isLogin: false

//     },
//     getters: {
//         // schoolData(state) {
//         //     console.log(state.schoolDatas.data, "state")
//         //     return state.schoolDatas.data
//         // },
//         // getloginuser(state) {
//         //     console.log(state.user.data, ':userstate')
//         // }
//         // ,
//         // isloginstate(state) {
//         //     console.log(state.isLogin, ':userstate')
//         //     return state.isLogin
//         // },
//         // getSchool(state) {
//         //     console.log(state.schoolData, ":state")
//         //     return state.schoolData.data
//         // }
//         // posts(state) {
//         //     return state.posts
//         // },
//         // userId(state) {
//         //     return state.userId
//         // },
//         // fetchAllData(state) {
//         //     return state.activities
//         // }
//     },
//     mutations: {

//         // setShoolsData(state, payload) {
//         //     console.log(payload, 'Route')
//         //     // state.schoolData = payload.concat()
//         //     state.schoolDatas = payload
//         //     // },
//         // },
//         // getSchoolData(state, payload) {
//         //     console.log(payload, 'Route')
//         //     state.schoolData = payload
//         // },
//         // loginMutations(state, payload) {
//         //     console.log(payload, 'loginMutations')
//         //     // state.schoolData = payload.concat()
//         //     state.user = payload
//         //     // },
//         // },
//         // schoolViewBoolean() {

//         // }

//     },
//     actions: {
//         // 学校データをすべて取得
//         // fetchSchoolsData({ commit }) {
//         //     http.get('/school', res => {
//         //         commit('setShoolsData', res.data)
//         //     }, null)
//         // },


//         // async loginAction({ commit }) {
//         //     await http.post('/auth/login', res => {
//         //         console.log(res.data);
//         //         commit('loginMutations', res.data)
//         //     }, null)
//         // },

//         // // 学校詳細データを１つ取得
//         // fetchSchoolData({ commit }, payload) {
//         //     console.log(payload, "fetchSchoolData:action")
//         //     http.get('/school/' + payload, res => {
//         //         commit('getSchoolData', res.data)
//         //         commit('schoolViewBoolean')
//         //     }, null)
//         // }
//     }
// });
>>>>>>> origin/layout_top

