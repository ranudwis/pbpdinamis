<template>
    <v-container v-if="post">
        <v-card class="mx-1 px-2">
            <v-img
                class="my-0"
                :src="gambar(post.file_gambar)"
                height="200px"
            ></v-img>

            <h1 class="text-center">{{ post.judul }}</h1>
            <h2 class="text-center">{{ post.komentar.isi }}</h2>
            <h4 class="text-center">Penulis : {{ post.penulis.user.nama }}</h4>
            <h4 class="text-center">Kategori : {{ post.kategori.nama }}</h4>

            <v-divider class="mx-4 my-1"></v-divider>

            <p class="text-justify mx-3 mb-2">{{ post.isipost }}</p>

        </v-card>

        <v-card
        max-width="450"
        class="mx-2 my-4"
        color="amber lighten-5"
        >
        <h2 class="text-center my-2">Komentar</h2>

        <v-container v-if="post">
            <v-card
                v-for="p in post.komentar"
                :key="p.idkomentar"
            >
                <h3 class="mx-2">{{ p.penulis.user.nama }}</h3>
                <p  class="mx-2">{{ p.isi }}</p>
            </v-card>
        </v-container>
        </v-card>

    </v-container>
</template>

<script>
import api from '@/api'

export default {
    data: () => ({
        post: null,
        komentar: null,
    }),

    methods: {
        gambar(url) {
            return process.env.VUE_APP_API_URL + url.replace('public', 'storage')
        }
    },

    async created() {
        let post = await api.get('post/' + this.$route.params.id)
        this.post = post.data
    },

}


</script>
