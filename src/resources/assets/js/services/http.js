import axios from 'axios'

export default {
    request(method, url, data, successCb = null, errorCb = null) {
        console.log(method, url, data, successCb);
        axios.request({
            url,
            data,
            method: method.toLowerCase()
        }).then(successCb).catch(errorCb)

    },
    get(url, successCb = null, errorCb = null) {
        return this.request('get', url, {}, successCb, errorCb)
    },
    post(url, data, successCb = null, errorCb = null) {
        return this.request('post', url, data, successCb, errorCb)
    },
    put(url, data, successCb = null, errorCb = null) {
        return this.request('put', url, data, successCb, errorCb)
    },
    delete(url, data = {}, successCb = null, errorCb = null) {
        return this.request('delete', url, data, successCb, errorCb)
    },

    init() {
        axios.defaults.baseURL = '/api/v1'
        axios.interceptors.request.use(config => {
            config.headers['X-CSRF-TOKEN'] = window.Laravel.csrfToken
            config.headers['X-Requested-With'] = 'XMLHttpRequest'
            return config
        })
    }
}