<template>
    <v-container v-if="kategori">
        <v-card
            v-for="kat in kategori"
            :key="kat.idkategori"
            :to="{ name: 'postkategori', params: {id: kat.idkategori} }"
            class="my-4"
            color="orange lighten-1"
        >
            <v-card-title class="pt-2 pb-1">{{ kat.nama }}</v-card-title>
            <v-divider class="mx-4"></v-divider>
            <v-card-text class="pt-1 pb-1">
                <p  class="my-0">Jumlah Postingan: {{ kat.post_count}} </p>
            </v-card-text>
        </v-card>
    </v-container>

    <loading-bar v-else></loading-bar>
</template>

<script>
import api from '@/api'
import LoadingBar from '@/components/LoadingBar'

export default {
    data: () => ({
        kategori: null,
    }),

    components: {
        LoadingBar
    },

    async created() {
        let kategori = await api.get('kategori')

        this.kategori = kategori.data
    }
}
</script>
