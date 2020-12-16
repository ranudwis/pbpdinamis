import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/views/Home'
import Kategori from '@/views/Kategori'
import PostKategori from '@/views/PostKategori'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    }, {
        path: '/kategori',
        name: 'kategori',
        component: Kategori
    }, {
        path: '/kategori/:id',
        name: 'postkategori',
        component: PostKategori,
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
