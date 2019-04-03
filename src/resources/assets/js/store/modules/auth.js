import types from '../mutation-types'
import http from '../../services/http'
// import router from '../../router/router'
import util from '../../utils/util';
import url from '../../utils/url';


const state = {
    currentuser: null,
    authStatus: false,
    token: localStorage.getItem(util.JWT_TOKEN) || '',
    // status: '',
}

const getters = {
    isUserStatus(state) {
        console.log(state.authStatus, "isstate")
        return state.authStatus
    },
    getCurrentUser(state) {
        console.log(state.currentuser, "ogo")
        return state.currentuser
    }

    // getUserName: (state, getters) => (id) => {
    //     console.log(state.users)
    //     return getters.getUser.find(user => user.id == id)
    // }
}


const mutations = {
    [types.AUTH_REGISTER](state, payload) {
        state.user = payload
        // console.log(payload, "AUTH_REGISTER:mutations")
    },

    [types.AUTH_LOGIN](state, payload) {
        state.currentuser = payload.user
        // state.token = payload.token.access_token
        // console.log(payload, "AUTH_LOGIN")
    },

    [types.AUTH_STATUS](state, payload) {
        state.authStatus = payload
        // console.log(payload, "AUTH_STATUS")

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
        return new Promise((resolve, reject) => {
            http.post(url.REGISTER, payload, res => {
                // console.log(res.user.data, "register:res")
                commit(types.AUTH_REGISTER, res.data.data);
                resolve(res.data.data);
                // console.log(res.JWT.data, "register:Actions")
            }, err => {
                localStorage.removeItem(util.JWT_TOKEN);
                reject(err)
            });
        });
    },

    login({ commit }, payload) {
        return new Promise((resolve, reject) => {
            // console.log(payload, 'login:actions');
            http.post(url.LOGIN, payload, res => {
                // console.log(res.data, "login:res.Actions")
                commit(types.AUTH_LOGIN, res.data)
                commit(types.AUTH_STATUS, res.data ? true : false)
                resolve(res.data)
                // console.log(res, "login:Actions")
            }, err => {
                localStorage.removeItem(util.JWT_TOKEN);
                reject(err)
                // console.log(err, "err:actions")
            });

        });
    },
    // login({ commit }, payload) {
    //     return new Promise(resolve => {
    //         http.post('/auth/login', payload, res => {
    //             console.log(res.data, ":testdata1")
    //             // commit(types.LOGIN_AUTH, res.data)
    //             commit('login_auth', res.data)
    //             console.log('login, ok')
    //             resolve()
    //         }, e => {
    //             console.log(e, "e")
    //             // alert(payload)
    //             // alert('Emailかpasswordが間違っています。')
    //         })

    //     })
    // },
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



