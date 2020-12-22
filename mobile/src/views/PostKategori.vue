<template>
    <v-container>
        <v-btn
            :to="{ name: 'kategori' }"
            class="ma-2"
            color="red darken-2"
            dark
            >
            <v-icon
              dark
              left
                >
              mdi-arrow-left
            </v-icon>kembali
        </v-btn>
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

export default {
    data: () => ({
        post: null
    }),
    components: {
        PostItem
    },
    async created() {
        let post = await api.get('post/kategori/' + this.$route.params.id)

        this.post = post.data
    }
}
</script>
