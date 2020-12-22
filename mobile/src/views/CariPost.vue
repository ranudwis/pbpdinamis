<template>
    <v-container>
        <v-row>
            <v-col
                cols="12"
                sm="6"
            >

                <v-text-field 
                    v-model="variabel"
                    @keyup.enter="cari"
                    label="Search for Post"
                    prepend-icon="mdi-magnify"
                ></v-text-field>

                <v-container v-if="post" class="d-flex flex-column align-center mx-auto">
                    
                    <v-card
                        v-for="p in post"
                        :key="p.idpost"
                        class="mb-5 rounded-xl"
                        max-width="344"
                        color="orange lighten-5"
                    >
                        <v-img
                            class=" my-0"
                            src="@/assets/qodKzDHqIo451YOaIbzb64uAymeoFUAl23wUkcdd.jpeg"
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
                                :to="{ name: 'detailpost', params: {id: p.idpost} }"
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
        variabel: null,
        post: null,
    }),

    methods: {
        async cari() {
            let post = await api.get('cari', { params: { pencarian: this.variabel } })
            this.post = post.data
        }
    }
}
</script>
    
