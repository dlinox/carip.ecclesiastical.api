<template>
    <v-app id="inspire">
        <v-app-bar class="" color="grey-lighten-4" elevation="1">
            <v-btn class="me-2" icon="mdi-menu" @click="drawer = !drawer">
            </v-btn>

            <v-spacer></v-spacer>

            <v-btn @click="signOut" color="red" icon>
                <v-icon>mdi-logout</v-icon>
            </v-btn>
        </v-app-bar>

        <v-footer app color="grey" height="44"></v-footer>

        <v-navigation-drawer floating v-model="drawer">
            <v-toolbar>
                <v-list-item
                    prepend-avatar="https://cdn.vuetifyjs.com/images/lists/1.jpg"
                    :title="user.fullname"
                    :subtitle="user.role"
                />
            </v-toolbar>
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

                <v-list-group value="records">
                    <template v-slot:activator="{ props }">
                        <v-list-item v-bind="props" title="Busqueda de constancias">
                            <template v-slot:prepend>
                        <v-icon> mdi-file-multiple </v-icon>
                    </template>
                        </v-list-item>
                    </template>

                    <v-list-item
                        v-for="(item, i) in records.children"
                        :key="i"
                        :title="item.title"
                        value="records"
                        @click="item.action"
                    ></v-list-item>
                </v-list-group>
            </v-list>
        </v-navigation-drawer>

        <v-main>
            <slot />
        </v-main>
    </v-app>
</template>

<script setup>
import { ref, computed } from "vue";
import { router, usePage } from "@inertiajs/vue3";
const drawer = ref(true);

const user = computed(() => usePage().props.user);

const signOut = async () => {
    router.post("/auth/sign-out");
};

const items = [
    {
        title: "Dashboard",
        icon: "mdi-view-dashboard",
        action: () => router.get("/a"),
    },
    {
        title: "Usuarios",
        icon: "mdi-account-group",
        action: () => router.get("/a/users"),
    },
    {
        title: "Sedes",
        icon: "mdi-office-building-marker-outline",
        action: () => router.get("/a/places"),
    },
];

const records = {
    title: "Busqueda de constancias",
    icon: "mdi-file-multiple",
    action: () => router.get("/a/records"),
    children: [
        {
            title: "Bautismo",
            icon: "mdi-file-multiple",
            action: () => router.get("/a/records"),
        },
        {
            title: "Confirmación",
            icon: "mdi-file-multiple",
            action: () => router.get("/a/records"),
        },
        {
            title: "Matrimonio",
            icon: "mdi-file-multiple",
            action: () => router.get("/a/records"),
        },
    ],
};
</script>
