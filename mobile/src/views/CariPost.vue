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
                    <post-item
                        v-for="p in post"
                        :key="p.idpost"
                        :p="p"
                    ></post-item>
                </v-container>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import api from '@/api'
import PostItem from '@/components/PostItem'

export default {
    components: {
        PostItem
    },

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
