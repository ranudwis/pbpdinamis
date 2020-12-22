<template>
    <v-app>
        <v-app-bar app color="white">
            Dunia Penuh Cerita
        </v-app-bar>

        <v-main>
            <router-view></router-view>
        </v-main>

        <v-bottom-navigation app grow color="primary">
            <v-btn :to="{ name: 'home' }" exact>
                <span>Home</span>

                <v-icon>mdi-home</v-icon>
            </v-btn>

            <v-btn :to="{ name: 'kategori' }" exact>
                <span>Kategori</span>

                <v-icon>mdi-view-sequential</v-icon>
            </v-btn>

            <v-btn :to="{ name: 'caripost' }" exact>
                <span>Cari</span>

                <v-icon>mdi-heart</v-icon>
            </v-btn>
        </v-bottom-navigation>
    </v-app>
</template>

<script>
export default {
    name: 'App',
}
</script>
