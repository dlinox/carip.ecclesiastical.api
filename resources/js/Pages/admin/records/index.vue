<template>
    <AdminLayout>
        <v-container>
            <v-card title="Buscar Constancias">
                <v-container>
                    <v-row>
                        <v-col cols="6" md="3">
                            <v-select
                                :items="items"
                                label="Constancia"
                                v-model="selected"
                                hint="Selecione un tipo de constancia"
                                persistent-hint
                            ></v-select>
                        </v-col>
                        <v-col cols="6" md="7">
                            <v-text-field
                                label="Buscar"
                                v-model="form.name"
                                hint="Ingrese el nombre"
                                persistent-hint
                            ></v-text-field>
                        </v-col>
                        <v-col cols="12" md="2">
                            <v-btn block color="primary">Buscar</v-btn>
                        </v-col>
                    </v-row>
                </v-container>
            </v-card>
        </v-container>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/layouts/AdminLayout.vue";
import { ref } from "vue";
const items = [
    "Constacia de bautismo",
    "Constacia de confirmación",
    "Constacia de matrimonio",
];

const form = ref({
    name: "",
});

const selected = ref("Constacia de bautismo");
</script>
