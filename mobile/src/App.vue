<template>
    <v-app>
        <v-main>
            <router-view></router-view>
        </v-main>

        <v-bottom-navigation>
            <v-btn :to="{ name: 'home' }">
                <span>Home</span>

                <v-icon>mdi-home</v-icon>
            </v-btn>

            <v-btn :to="{ name: 'kategori' }">
                <span>Kategori</span>

                <v-icon>mdi-heart</v-icon>
            </v-btn>

            <v-btn>
                <span>Cari</span>

                <v-icon>mdi-magnify</v-icon>
            </v-btn>
        </v-bottom-navigation>
    </v-app>
</template>

<script>
export default {
    name: 'App',
}
</script>
