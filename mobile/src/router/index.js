import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '@/views/Home'
import Kategori from '@/views/Kategori'
import PostKategori from '@/views/PostKategori'
import CariPost from '@/views/CariPost'
import DetailPost from '@/views/DetailPost'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        redirect: '/post'
    }, {
        path: '/post',
        name: 'home',
        component: Home,
        meta: {
            root: true
        }
    }, {
        path: '/kategori',
        name: 'kategori',
        component: Kategori,
        meta: {
            root: true
        }
    }, {
        path: '/kategori/:id',
        name: 'postkategori',
        component: PostKategori,
    }, {
        path: '/caripost',
        name: 'caripost',
        component: CariPost,
        meta: {
            root: true
        }
    }, {
        path: '/post/:id',
        name: 'detailpost',
        component: DetailPost
    }
]

const router = new VueRouter({
    mode: 'hash',
    base: process.env.BASE_URL,
    routes
})

export default router
