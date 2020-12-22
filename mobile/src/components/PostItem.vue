<template>
  <v-card
      class="mb-5 rounded-xl"
      max-width="344"
      color="orange lighten-5"
     :to="{ name: 'detailpost', params: {id: p.idpost} }"
  >
    <v-img
        class="my-0"
        :src="gambar(p.file_gambar)"
        height="200px"
    ></v-img>

    <v-card-title class="my-0">{{ p.judul }}</v-card-title>

    <v-card-text>
        <h3 class="my-0">Penulis : {{ p.penulis.user.nama }} </h3>
        <h3 class="mb-2">Kategori : {{ p.kategori.nama }} </h3>
        <div class="text-truncate" style="max-width: 350px;">
            {{ p.isipost }}
        </div>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
    name: 'PostItem',

    props: ['p'],

    methods: {
        gambar(url) {
            return process.env.VUE_APP_API_URL + url.replace('public', 'storage')
        }
    }
}
</script>
