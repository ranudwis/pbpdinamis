<template>
    <v-container>
        <v-btn
            :to="{ name: 'kategori' }"
            class="ma-2"
            color="red darken-4"
            dark
            >
            <v-icon
              dark
              left
                >
              mdi-arrow-left
            </v-icon>Back
        </v-btn>




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
