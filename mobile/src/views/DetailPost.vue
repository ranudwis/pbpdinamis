<template>
    <v-container>
        <div class="text-left">
            <v-btn
                :to="{ name: 'home' }" exact
                class="ml-1 mb-2"
                color="red darken-2"
                dark
            >
            <v-icon
                dark
                left
            >
                mdi-arrow-left
            </v-icon>
            kembali
            </v-btn>
        </div>

        <v-card class="mx-1 px-2">
            <v-img
            class="my-0"
            src="@/assets/qodKzDHqIo451YOaIbzb64uAymeoFUAl23wUkcdd.jpeg"
            height="200px"
            ></v-img>

            <h1 class="text-center">{{ post.judul }}</h1>
            <h4 class="text-center">Penulis : Dandi</h4>
            <!-- <h4 class="text-center">Kategori : {{ post.kategori.nama }}</h4> -->

            <v-divider class="mx-4 my-1"></v-divider>

            <h3 class="text-center">Cerita Lengkap</h3>

            <p class="text-justify mx-3 mb-2">{{ post.isipost }}</p>

        </v-card>

        <v-card
        max-width="450"
        class="mx-2 my-4"
        color="green accent-1"
        >
        <h2 class="text-center my-2">Komentar</h2>

        <v-list three-line>
            <template v-for="(item, index) in items">
                <v-subheader
                    v-if="item.header"
                    :key="item.header"
                    v-text="item.header"
                ></v-subheader>

                <v-divider
                v-else-if="item.divider"
                :key="index"
                :inset="item.inset"
                ></v-divider>

                <v-list-item
                v-else
                :key="item.title"
                >
                <v-list-item-avatar>
                    <v-img :src="item.avatar"></v-img>
                </v-list-item-avatar>

                <v-list-item-content>
                    <v-list-item-title v-html="item.title"></v-list-item-title>
                    <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
                </v-list-item-content>
                </v-list-item>
            </template>
        </v-list>
        </v-card>

    </v-container>
</template>

<script>
import api from '@/api'

export default {
    data: () => ({
        post: null,
        kategori: null,

        items: [
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
          title: 'Brunch this weekend?',
          subtitle: `<span class="text--primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle: `<span class="text--primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
          title: 'Oui oui',
          subtitle: '<span class="text--primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg',
          title: 'Birthday gift',
          subtitle: '<span class="text--primary">Trevor Hansen</span> &mdash; Have any ideas about what we should get Heidi for her birthday?',
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/5.jpg',
          title: 'Recipe to try',
          subtitle: '<span class="text--primary">Britta Holt</span> &mdash; We should eat this: Grate, Squash, Corn, and tomatillo Tacos.',
        },
      ],
    }),

    async created() {
        let post = await api.get('post/' + this.$route.params.id)
        this.post = post.data

        let kategori = await api.get('kategori')
        this.kategori = kategori.data
    }
}

 
</script>
