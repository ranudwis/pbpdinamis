<template>
    <v-container v-if="post" class="d-flex flex-column align-center mx-auto">
        <post-item
            v-for="p in post"
            :key="p.idpost"
            :p="p"
        ></post-item>
    </v-container>

    <loading-bar v-else></loading-bar>
</template>

<script>
import api from '@/api'
import PostItem from '@/components/PostItem'
import LoadingBar from '@/components/LoadingBar'

export default {
    components: {
        PostItem,
        LoadingBar,
    },

    data: () => ({
        post: null,
        kategori: null,
        users: null,
        penulis: null,
    }),

    async created() {
        let post = await api.get('post')
        this.post = post.data
    }
}
</script>
