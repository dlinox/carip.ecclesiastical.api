<template>
    <AdminLayout>
        <HeadingPage title="Sedes" subtitle="Lista de sedes">
            <template #actions>
                <BtnDialog title="Nuevo" width="700px">
                    <template v-slot:activator="{ dialog }">
                        <v-btn
                            @click="dialog"
                            prepend-icon="mdi-plus"
                            variant="flat"
                        >
                            Nuevo
                        </v-btn>
                    </template>
                    <template v-slot:content="{ dialog }">
                        <create
                            @on-cancel="dialog"
                            :url="url"
                            :planta="planta"
                        />
                    </template>
                </BtnDialog>
            </template>
        </HeadingPage>
        <v-container fluid>
            <v-card>
                <v-card-item>
                    <DataTable
                        :headers="headers"
                        :items="items"
                        with-action
                        :url="url"
                    >
                        <template v-slot:header="{ filter }">
                            <v-row class="py-3" justify="end">
                                <v-col cols="6">
                                    <v-text-field
                                        v-model="filter.search"
                                        label="Buscar"
                                    />
                                </v-col>
                            </v-row>
                        </template>

                        <template v-slot:item.is_active="{ item }">
                            <v-btn
                                :color="item.is_active ? 'blue' : 'red'"
                                variant="tonal"
                                density="comfortable"
                            >
                                <DialogConfirm
                                    text="¿Seguro de actualizar el estado?"
                                    @onConfirm="
                                        () =>
                                            router.patch(
                                                url +
                                                    '/update-state/' +
                                                    item[`${primaryKey}`]
                                            )
                                    "
                                />
                                {{ item.is_active ? "activo" : "inactivo" }}
                            </v-btn>
                        </template>

                        <template v-slot:action="{ item }">
                            <BtnDialog title="Editar" width="500px">
                                <template v-slot:activator="{ dialog }">
                                    <v-btn
                                        color="info"
                                        icon
                                        variant="outlined"
                                        density="comfortable"
                                        @click="dialog"
                                    >
                                        <v-icon
                                            size="x-small"
                                            icon="mdi-pencil"
                                        ></v-icon>
                                    </v-btn>
                                </template>
                                <template v-slot:content="{ dialog }">
                                    <create
                                        @on-cancel="dialog"
                                        :form-data="item"
                                        :edit="true"
                                        :url="url + '/' + item[`${primaryKey}`]"
                                    />
                                </template>
                            </BtnDialog>

                            <v-btn
                                icon
                                variant="outlined"
                                density="comfortable"
                                class="ml-1"
                                color="red"
                            >
                                <DialogConfirm
                                    @onConfirm="
                                        () =>
                                            router.delete(
                                                url +
                                                    '/' +
                                                    item[`${primaryKey}`]
                                            )
                                    "
                                />
                                <v-icon
                                    size="x-small"
                                    icon="mdi-delete-empty"
                                ></v-icon>
                            </v-btn>
                        </template>
                    </DataTable>
                </v-card-item>
            </v-card>
        </v-container>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/layouts/AdminLayout.vue";
import HeadingPage from "@/components/HeadingPage.vue";
import BtnDialog from "@/components/BtnDialog.vue";
import DialogConfirm from "@/components/DialogConfirm.vue";
import DataTable from "@/components/DataTable.vue";
import { router } from "@inertiajs/core";

import create from "./create.vue";

const props = defineProps({
    items: Object,
    headers: Array,
    filters: Object,
    perPageOptions: Array,
});

const url = "/a/places";
const primaryKey = "id";
</script>
