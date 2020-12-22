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
        <v-card class="mx-1 px-2">
                <v-img
                class="my-0"
                src="@/assets/qodKzDHqIo451YOaIbzb64uAymeoFUAl23wUkcdd.jpeg"
                height="200px"
                ></v-img>

                <h1 class="text-center">{{ post.judul }}</h1>
                <h4 class="text-center">Penulis : {{penulis.}}</h4>
                <!-- <h4 class="text-center">Kategori : {{ post.kategori.nama }}</h4> -->

                <v-divider class="mx-4 my-1"></v-divider>

                <h3 class="text-center">Cerita Lengkap</h3>

                <p class="text-justify mx-3 mb-2">{{ post.isipost }}</p>
        </v-card>
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
