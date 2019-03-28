// import types from '../mutation-types'
import http from '../../services/http'
// import router from '../../router/router'
import util from '../../utils/util';


const state = {
    user: {},
    authenticate: false,
    token: localStorage.getItem(util.JWT_TOKEN) || '',
    // status: '',
}

const getters = {
    getUser: (state) => {
        console.log(state.users)
        return state.users
    },
    getUserName: (state, getters) => (id) => {
        console.log(state.users)
        return getters.getUser.find(user => user.id == id)
    }
}


const mutations = {
    // [types.REGISTER_AUTH](state, payload) {
    register_auth(state, payload) {
        state.user = payload.user
        state.authenticate = true
        console.log('1-1')
    },
    // [types.LOGIN_AUTH](state, payload) {
    login_auth(state, payload) {
        // logintest(state, payload) {
        state.user = payload.user
        state.authenticate = true
        console.log('1-2')
    },
    // [types.LOGOUT_AUTH](state) {
    logout_auth(state) {
        localStorage.removeItem('jwt-token')
        state.user = null
        state.authenticate = false
    },
    getUsers(state, payload) {
        // console.log(payload)
        Object.assign(state, { users: payload })
    }
}


const actions = {
    register({ commit }, payload) {
        return new Promise(resolve => {
            console.log(payload)
            http.post('/auth/register', payload, res => {
                // commit(types.REGISTER_AUTH, res.data)
                console.log('register, koko')
                commit("register_auth", res.data)
                console.log('register, ok')
                resolve()
            }, e => {
                console.log(e, "e")
                alert('Emailを正しく入力してください。')
            })
        })

    },
    login({ commit }, payload) {

        return new Promise(resolve => {
            http.post('/auth/login', payload, res => {
                console.log(res.data, ":testdata1")
                // commit(types.LOGIN_AUTH, res.data)
                commit('login_auth', res.data)
                console.log('login, ok')
                resolve()
            }, e => {
                console.log(e, "e")
                // alert(payload)
                // alert('Emailかpasswordが間違っています。')
            })

        })
    },
    logout({ commit }) {
        return new Promise(resolve => {
            http.get('/logout', () => {
                // commit(types.LOGOUT_AUTH)
                commit(logout_auth)
                resolve()
            }, null)
        })

    },
    async getUsers({ commit }) {
        const res = await axios.get('/users')
        // console.log(res.data)
        commit('getUsers', res.data)
    }
}



export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters
}

// import Vue from 'vue';
// import Vuex from 'vuex';

// import http from '../../services/http';
// import urls from '../../utils/url';
// import util from '../../utils/util';
// import types from '../mutation-types';

// Vue.use(Vuex);

// export default new Vuex.Store({

//     state: {

//         user: {},
//         token: localStorage.getItem(util.JWT_TOKEN) || '',
//         status: '',
//         isLogin: false

//     },
//     getters: {
//         // schoolData(state) {
//         //     console.log(state.schoolData.data, "state")
//         //     return state.schoolData.data

//         // }

//     },
//     mutations: {

//         loginMutations(state, payload) {
//             console.log(payload, 'loginMutations')
//             // state.schoolData = payload.concat()
//             state.user = payload
//             // },
//         }

//     },
//     actions: {

//         loginAction({ commit }) {
//             http.post('/auth/login', res => {
//                 commit('loginMutations', res.data)
//             }, null)

//         },
//     }
// });


// const actions = {

//     // register({ commit }) {
//     //     // console.log({ commit });
//     //     http.post('/auth/register', res => {
//     //         commit('types.AUTH_SUCCESS', res.data)
//     //     }, null)
//     // },


//     register({ commit }, payload) {
//         return new Promise((resolve, reject) => {
//             commit(types.AUTH_LOADING);
//             console.log("actions")
//             http.post(urls.REGISTER, payload, res => {
//                 commit(types.AUTH_SUCCESS, res.data);
//                 resolve(res.data);

//             }, err => {
//                 commit(types.AUTH_ERROR, err);
//                 localStorage.removeItem(util.JWT_TOKEN);
//                 reject(err)
//             });
//         });

//     },
//     login({ commit }, payload) {
//         return new Promise((reject) => {
//             commit(types.AUTH_LOADING);
//             http.post(urls.LOGIN, payload, res => {
//                 commit(types.AUTH_SUCCESS, res.data);
//             }, err => {
//                 commit(types.AUTH_ERROR, err);
//                 localStorage.removeItem(util.JWT_TOKEN);
//                 reject(err)
//             });
//         });
//     },

//     logout({ commit }) {
//         return new Promise((resolve) => {
//             http.get(urls.LOGOUT, () => {
//                 commit(types.AUTH_LOGOUT);
//                 localStorage.removeItem(util.JWT_TOKEN);
//                 resolve();
//             }, null);
//         });
//     },
//     setCurrentUser({ commit }) {
//         if (!!state.token) {
//             return new Promise((reject) => {
//                 commit(types.AUTH_LOADING);
//                 http.get(urls.ME, res => {
//                     commit(types.AUTH_ME, res.data);
//                 }, err => {
//                     commit(types.AUTH_ERROR, err);
//                     localStorage.removeItem(util.JWT_TOKEN);
//                     reject(err);
//                 });
//             });
//         }
//     }
// };

// const mutations = {

//     [types.AUTH_LOGOUT]() {
//         state.user = {};
//         state.token = '';
//     },
//     [types.AUTH_LOADING](state) {
//         state.status = util.AUTH_STATUS_LOADING;
//     },
//     [types.AUTH_SUCCESS](state, payload) {
//         state.status = util.AUTH_STATUS_SUCCESS;
//         state.token = payload.token;
//         Object.assign(state, { user: payload.user });
//     },
//     [types.AUTH_ERROR](state) {
//         state.status = util.AUTH_STATUS_ERROR;
//     },
//     [types.AUTH_ME](state, payload) {
//         state.status = util.AUTH_STATUS_SUCCESS;
//         Object.assign(state, { user: payload.data });
//     },
// };

// const getters = {
//     user: state => state.user,
//     status: state => state.status,
//     isLoggedIn: state => !!state.token
// };

// export default {
//     namespaced: true,
//     state,
//     mutations,
//     getters,
//     actions
// };



