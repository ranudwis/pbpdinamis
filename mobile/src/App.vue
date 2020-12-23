<template>
    <v-app>
        <v-app-bar app color="white">
            <v-btn
                v-if="! $route.meta.root"
                icon
                @click="$router.back()"
            >
                <v-icon>
                    mdi-arrow-left
                </v-icon>
            </v-btn>

            <v-toolbar-title>
                {{ $store.state.judul }}
            </v-toolbar-title>
        </v-app-bar>

        <v-main>
            <router-view></router-view>
        </v-main>

        <v-bottom-navigation app grow color="orange">
            <v-btn :to="{ name: 'home' }">
                <span>Home</span>

                <v-icon>mdi-home</v-icon>
            </v-btn>

            <v-btn :to="{ name: 'kategori' }">
                <span>Kategori</span>

                <v-icon>mdi-view-sequential</v-icon>
            </v-btn>

            <v-btn :to="{ name: 'caripost' }">
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

<style scoped>
.v-btn:not(.v-btn--round).v-size--default {
    height: inherit;
}
</style>
