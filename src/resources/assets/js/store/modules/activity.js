// 参照
import http from '../../services/http'
import axios from 'axios'
import types from '../mutation-types'


const state = {

    // Activity.vue
    getActivityData: null,
    isActivity: false,

    // Search.vue
    getAllActivities: [],
    isAllStatus: false,
    search: ''

}

const getters = {

    // Activity.vue
    getActivityData(state) {
        console.log(state.getActivityData, "getter")
        return state.getActivityData.data
    },
    isActivity(state) {
        return state.isActivity
    },

    // Search.vue
    getAllActivities(state) {
        // console.log(state.getAllActivities)
        return state.getAllActivities
    },
    isAllStatus(state) {
        // console.log(state.isAllStatus)
        return state.isAllStatus
    },
    fetchSearchData: (state, getters) => {

        return state.search === '' ?
            false :
            getters.getAllActivities.filter(activity => activity.activity_name.match(state.search) || activity.school.school_name.match(state.search))


        // console.log(state.getAllActivities);
        // let Data = state.search === '' ? false :
        //     getters.getAllActivities.filter(activity => activity.activity_name.match(state.search) || activity.school.school_name.match(state.search))
        // let Length = Data.length
        // console.log(Length);
        // console.log(Data);
        // console.log({
        //     Data: Data,
        //     Length: Length
        // })
        // return {
        //     Data: Data,
        //     Length: Length
        // }
    },
}

const mutations = {

    // Activity.vue
    getActivityData(state, payload) {
        state.getActivityData = payload
    },
    isActivity(state, payload) {
        state.isActivity = payload
    },

    // Search.vue
    getAllActivities(state, payload) {
        console.log(payload.data, "mutesyon")
        state.getAllActivities = payload.data
    },
    isActivities(state, payload) {
        state.isAllStatus = payload
    },
    setSearchWord(state, payload) {
        // console.log(payload)
        setTimeout(() => {
            state.search = payload
        }, 500)
    },
}

const actions = {

    // Activity.vue
    getActivityData({ commit }, payload) {
        http.get('/activity/' + payload, res => {
            console.log(res.data)
            commit('getActivityData', res.data)
            commit('isActivity', res ? true : false)
        }, null)
    },

    // Search.vue
    getAllActivities({ commit }) {
        http.get('/activity', res => {
            commit('getAllActivities', res.data)
            commit('isActivities', res ? true : false)
        }, null)
    },

}

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
