import http from '../../services/http'
import axios from 'axios'
import types from '../mutation-types'


const state = {

    // TheTop.vue
    schoolAllData: null,
    isStatus: false,

    // DetailSchool.vue
    getSchoolData: null,
    isSchoolStatus: false,
}

const getters = {

    // TheTop.vue
    schoolAllData(state) {
        return state.schoolAllData.data
    },
    isStatus(state) {
        return state.isStatus
    },

    // DetailSchool.vue
    getSchoolData(state) {
        return state.getSchoolData.data
    },
    isSchoolStatus(state) {
        return state.isSchoolStatus
    },

}

const mutations = {

    // TheTop.vue
    schoolAllData(state, payload) {
        state.schoolAllData = payload;
    },
    isStatus(state, payload) {
        state.isStatus = payload
    },

    // DetailSchool.vue
    getSchoolData(state, payload) {
        state.getSchoolData = payload
    },
    isSchoolStatus(state, payload) {
        state.isSchoolStatus = payload
    },
}

const actions = {

    // TheTop.vue
    fetchSchoolsData({ commit }) {
        http.get('/school', res => {
            commit('schoolAllData', res.data)
            commit('isStatus', res ? true : false)
        }, null)
    },

    // DetailSchool.vue
    getSchoolData({ commit }, payload) {
        http.get('/school/' + payload, res => {
            commit('getSchoolData', res.data)
            commit('isSchoolStatus', res ? true : false)
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