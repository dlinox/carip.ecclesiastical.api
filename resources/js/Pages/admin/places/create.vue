<template>
    <SimpleForm
        :formularioJson="formStructure"
        v-model="form"
        @onCancel="$emit('onCancel')"
        @onSumbit="submit"
    >
    </SimpleForm>
</template>

<script setup>
import SimpleForm from "@/components/SimpleForm.vue";
import { useForm } from "@inertiajs/vue3";
const emit = defineEmits(["onCancel", "onSubmit"]);
const props = defineProps({
    planta: [String, Number],
    formData: {
        type: Object,
        default: {
            name: "",
            address: "",
            ubigeo_code: null,
        },
    },
    edit: {
        type: Boolean,
        default: false,
    },
    url: String,
});

const form = useForm({ ...props.formData });

const formStructure = [
    {
        key: "name",
        label: "Nombre",
        type: "text",
        required: true,
        cols: 12,
    },
    {
        key: "address",
        label: "Dirección",
        type: "text",
        required: true,
        cols: 12,
    },

    {
        key: "ubigeo_code",
        label: "Ubicación",
        type: "autocomplete",
        url: "/autocomplete/ubigeos",
        itemTitle: "ubigeo",
        itemValue: "code",
        itemsDefault: form.ubigeo,
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
