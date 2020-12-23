<template>
    <v-container class="d-flex flex-column align-center mx-auto">
        <loading-bar v-if="! post"></loading-bar>

        <div v-else-if="post.length == 0" class="text-center">
            Tidak ada postingan
        </div>

        <post-item
            v-for="p in post"
            :key="p.idpost"
            :p="p"
        ></post-item>
    </v-container>
</template>

<script>
import api from '@/api'
import PostItem from '@/components/PostItem'
import LoadingBar from '@/components/LoadingBar'

export default {
    data: () => ({
        post: null
    }),
    components: {
        PostItem,
        LoadingBar
    },
    async created() {
        let post = await api.get('post/kategori/' + this.$route.params.id)

        this.$store.commit('setJudul', post.data.kategori)

        this.post = post.data.post
    },

    destroyed() {
        this.$store.commit('resetJudul')
    }
}
</script>
