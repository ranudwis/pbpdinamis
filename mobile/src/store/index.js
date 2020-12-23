import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        judul: 'Dunia Penuh Cerita'
    },
    mutations: {
        setJudul(state, judul) {
            state.judul = judul
        },

        resetJudul(state) {
            state.judul = 'Dunia Penuh Cerita'
        }
    },
    actions: {
    },
    modules: {
    }
})
