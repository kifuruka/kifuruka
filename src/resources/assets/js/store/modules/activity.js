// 参照
import http from '../../services/http'
import axios from 'axios'
import types from '../mutation-types'


const state = {


    activityAllData: null,
    isStatus: false,

    // Activity.vue
    getActivityData: [],
    isActivity: false,

}

const getters = {

    // Activity.vue
    getActivityData(state) {
        return state.getActivityData
    },
    isActivity(state) {
        return state.isActivity
    },


}

const mutations = {

    // Activity.vue
    getActivityData(state, payload) {
        state.getActivityData = payload
    },

    isActivity(state, payload) {
        state.isActivity = payload
    }


}

const actions = {

    // Activity.vue
    getActivityData({ commit }, payload) {
        http.get('/activity/' + payload, res => {
            commit('getActivityData', res.data)
            commit('isActivity', res ? true : false)
        }, null)
    }
}

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
