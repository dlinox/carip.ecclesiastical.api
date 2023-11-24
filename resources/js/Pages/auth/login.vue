<template>
    <v-app id="login">
        <v-form @submit.prevent="login">
            <div class="d-flex justify-center align-center h-screen w-screen">
                <v-card class="mx-auto" width="400">
                    <img height="200" src="@/assets/images/img-login-1.jpg" style="width: 100%; object-fit: cover;" />
                    <v-card-title class="text-center">
                        <h1 class="text-h5">Login</h1>
                    </v-card-title>
                    <v-card-text>
                        <v-row>
                            <v-col cols="12">
                                <v-text-field
                                    v-model.trim="form.email"
                                    label="Email"
                                    type="email"
                                    outlined
                                    dense
                                    required
                                ></v-text-field>
                            </v-col>
                            <v-col cols="12">
                                <v-text-field
                                    v-model.trim="form.password"
                                    label="Password"
                                    type="password"
                                    outlined
                                    dense
                                    required
                                ></v-text-field>
                            </v-col>
                        </v-row>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn  block type="sibmit" variant="flat">
                            Iniciar sesión
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </div>
        </v-form>
    </v-app>
</template>
<script setup lang="ts">
import { ref } from "vue";
import { router } from '@inertiajs/vue3'

const form = ref({
    email: "richard@gmail.com",
    password: "password",
});

const login = async () => {

    console.log(form.value);

    router.post('/auth/sign-in', form.value);

    // let res = await axios.post("/auth/sign-in", form.value);
    // console.log(res.data);

};
</script>
