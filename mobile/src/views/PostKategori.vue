<template>
    <v-container>
        Ini halaman postingan dengan kategori tertentu {{ $route.params }}
    </v-container>
</template>

<script>
import api from '@/api'

export default {
    data: () => ({
        post: null
    }),

    async created() {
        let post = await api.get('post/kategori/' + this.$route.params.id)

        this.post = post.data
    }
}
</script>
