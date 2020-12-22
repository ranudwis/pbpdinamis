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
                    color="orange"
                ></v-text-field>

                <v-container v-if="post && post.length !=0 && !loading" class="d-flex flex-column align-center mx-auto">
                    <post-item
                        v-for="p in post"
                        :key="p.idpost"
                        :p="p"
                    ></post-item>
                </v-container>

                <div v-else-if="post && post.length == 0" class="text-h5 text-center">
                    <h5>Hasil pencarian tidak ditemukan</h5>
                </div>

                <loading-bar v-else-if="loading"></loading-bar>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import api from '@/api'
import PostItem from '@/components/PostItem'
import LoadingBar from '@/components/LoadingBar'

export default {
    components: {
        PostItem,
        LoadingBar
    },

    data: () => ({
        variabel: null,
        post: null,
        loading: false
    }),

    methods: {
        async cari() {
            this.post = null
            this.loading = true

            let post = await api.get('cari', { params: { pencarian: this.variabel } })

            this.loading = false
            this.post = post.data
        }
    }
}
</script>
