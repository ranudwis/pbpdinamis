<template>
    <v-container>
        <v-row>
            <v-col
                cols="12"
                sm="6"
            >

                <v-text-field
                    label="Search for Post"
                    prepend-icon="mdi-magnify"
                ></v-text-field>

                <v-container v-if="post">
                    <v-card
                        v-for="p in post"
                        :key="p.idpost"
                        class="mb-5 rounded-xl"
                        max-width="344"
                        color="orange lighten-5"
                    >
                    
                        <v-img
                            class=" my-0"
                            src="@/assets/06o89NygsKFcyMpfaoesP0gtUOEPxvEfbHWkoK8M.jpeg"
                            height="200px"
                        ></v-img>

                        <v-card-title class="my-0">{{ p.judul }}</v-card-title>

                        <v-card-text>
                            <h3 class="my-0">Penulis : Dandi </h3>
                            <h3 class="mb-2">Kategori : {{ p.kategori.nama }} </h3>
                            <div class="text-truncate" style="max-width: 350px;">
                                {{ p.isipost }}
                            </div>
                        </v-card-text>

                        <div class="text-center">
                            <v-btn
                                class="mb-4 rounded-b-lg"
                                color="teal darken-1"
                                    dark
                            >
                                DETAIL POST
                            </v-btn>
                        </div>
                    </v-card>
                </v-container>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import api from '@/api'

export default {
    data: () => ({
        post: null,
        kategori: null,
        users: null,
        penulis: null,
    }),

    async created() {

        let post = await api.get('post')
        this.post = post.data

        let kategori = await api.get('kategori')
        this.kategori = kategori.data

        let users = await api.get('users')
        this.users = users.data

        let penulis = await api.get('penulis')
        this.penulis = penulis.data
    }
}
</script>
    
