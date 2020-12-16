<template>
    <v-container v-if="kategori">
        <v-card
            v-for="kat in kategori"
            :key="kat.idkategori"
            :to="{ name: 'postkategori', params: {id: kat.idkategori} }"
            class="my-4"
        >
            <v-card-title>{{ kat.nama }}</v-card-title>
        </v-card>
    </v-container>
</template>

<script>
import api from '@/api'

export default {
    data: () => ({
        kategori: null,
    }),

    async created() {
        let kategori = await api.get('kategori')

        this.kategori = kategori.data
    }
}
</script>
