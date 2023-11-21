<template>
    <v-app id="inspire">
        <v-app-bar class="" color="grey-lighten-4" elevation="1">
            <v-btn class="me-2" icon="mdi-menu" @click="drawer = !drawer">
            </v-btn>

            <v-spacer></v-spacer>

            <v-avatar
                @click="signOut"
                class="me-3"
                color="surface-variant"
                size="32"
                variant="flat"
            ></v-avatar>
        </v-app-bar>

        <v-footer app color="grey" height="44"></v-footer>

        <v-navigation-drawer floating v-model="drawer">
            <v-toolbar>
                <v-list-item
                    prepend-avatar="https://cdn.vuetifyjs.com/images/lists/1.jpg"
                    title="Nombre usuario"
                    subtitle="Segretaria"
                />
            </v-toolbar>

            <div class="px-2 my-2">
                <v-text-field
                    class="mb-4"
                    density="compact"
                    flat
                    hide-details
                    prepend-inner-icon="mdi-magnify"
                    variant="solo-filled"
                >
                </v-text-field>

                <v-divider ></v-divider>
            </div>

            <v-list>
                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    link
                    @click="item.action"
                >
                    <template v-slot:prepend>
                        <v-icon>{{ item.icon }}</v-icon>
                    </template>

                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <v-sheet class="mx-auto pa-2 pt-6" color="blue-lighten-4">
                <v-sheet
                    color="grey-lighten-2"
                    height="24"
                    rounded="pill"
                    width="88"
                ></v-sheet>
                <v-slide-group show-arrows>
                    <v-slide-group-item v-for="n in 5" :key="n">
                        <v-sheet
                            class="ma-3"
                            color="grey-lighten-1"
                            height="200"
                            rounded
                            width="250"
                        ></v-sheet>
                    </v-slide-group-item>
                </v-slide-group>
            </v-sheet>
            <v-container fluid> </v-container>
        </v-main>
    </v-app>
</template>

<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";
const drawer = ref(true);

const signOut = async () => {
    router.post("/auth/sign-out");
};

const items = [
    {
        title: "Dashboard",
        icon: "mdi-view-dashboard",
        action: () => router.get("/admin"),
    },

];
</script>
