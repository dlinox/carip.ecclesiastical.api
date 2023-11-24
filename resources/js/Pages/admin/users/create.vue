<template>
    <v-row>
        <v-col cols="12">
            <v-text-field v-model="dniSearch" label="Buscar"></v-text-field>

            <v-btn @click="dniSearchFuntion"> Buscar </v-btn>
        </v-col>
    </v-row>

    <SimpleForm
        :formularioJson="edit ? formStructureEdit : formStructure"
        v-model="form"
        @onCancel="$emit('onCancel')"
        @onSumbit="submit"
    >
    </SimpleForm>
</template>

<script setup>
import SimpleForm from "@/components/SimpleForm.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
const emit = defineEmits(["onCancel", "onSubmit"]);

const props = defineProps({
    planta: [String, Number],
    formData: {
        type: Object,
        default: {
            name: "",
            paternal_name: "",
            maternal_name: "",
            email: "",
            document_number: "",
            phone: "",
            role: "",
            password: "",
            place_id: "",
        },
    },
    edit: {
        type: Boolean,
        default: false,
    },
    url: String,
});

const dniSearch = ref(null);

const dniSearchFuntion = async () => {
    let res = await axios.get(`/api/dni/${dniSearch.value}`);
    console.log(res.data);

    form.name = res.data.nombres;
    form.paternal_name = res.data.apellidoPaterno;
    form.maternal_name = res.data.apellidoMaterno;
    form.document_number = res.data.numeroDocumento;
};

const form = useForm({ ...props.formData });

const formStructure = [
    {
        key: "document_number",
        label: "DNI",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "name",
        label: "Nombre",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "paternal_name",
        label: "Apellido Paterno",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "maternal_name",
        label: "Apellido Materno",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "email",
        label: "Correo",
        type: "email",
        required: true,
        cols: 12,
    },

    // {
    //     key: "phone",
    //     label: "Teléfono",
    //     type: "text",
    //     required: true,
    //     cols: 12,
    // },
    {
        key: "role",
        label: "Rol",
        type: "select",
        required: true,
        cols: 12,
        options: ["Administrador", "Secretaria"],
    },
    {
        key: "password",
        label: "Contraseña",
        type: "password",
        required: true,
        cols: 12,
    },
    {
        key: "place_id",
        label: "Sede",
        type: "autocomplete",
        url: "/autocomplete/places",
        itemTitle: "name",
        itemValue: "id",
        itemsDefault: form.sede,
        required: true,
        cols: 12,
    },
];

const formStructureEdit = [
    {
        key: "name",
        label: "Nombre",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "paternal_name",
        label: "Apellido Paterno",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "maternal_name",
        label: "Apellido Materno",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "email",
        label: "Correo",
        type: "email",
        required: true,
        cols: 12,
    },

    {
        key: "role",
        label: "Rol",
        type: "select",
        required: true,
        cols: 12,
        options: ["Administrador", "Secretaria"],
    },
    // {
    //     key: "password",
    //     label: "Contraseña",
    //     type: "password",
    //     required: true,
    //     cols: 12,
    // },
    {
        key: "place_id",
        label: "Sede",
        type: "autocomplete",
        url: "/autocomplete/places",
        itemTitle: "name",
        itemValue: "id",
        itemsDefault: form.sede,
        required: true,
        cols: 12,
    },
];

const submit = async () => {
    form.prov_plan_id = props.planta;

    if (props.edit) form.put(props.url, option);
    else form.post(props.url, option);
};

const option = {
    onSuccess: (page) => {
        console.log("onSuccess");
        emit("onCancel");
    },
    onError: (errors) => {
        console.log("onError");
    },
    onFinish: (visit) => {
        console.log("onFinish");
    },
};
</script>
