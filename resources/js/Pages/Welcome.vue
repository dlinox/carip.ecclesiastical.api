<template>
    <v-app id="inspire">
      <v-app-bar class="" color="grey-lighten-4" elevation="1">
        <v-btn class="me-2" icon="mdi-menu" @click="drawer = !drawer"> </v-btn>
  
        <v-spacer></v-spacer>
  
        <v-avatar
          class="me-3"
          color="surface-variant"
          size="32"
          variant="flat"
        ></v-avatar>
      </v-app-bar>
  
      <v-footer app color="grey" height="44"></v-footer>
  
      <v-navigation-drawer floating v-model="drawer">
        <div class="d-flex px-2 my-2">
          <v-btn
            class="flex-grow-1"
            color="grey"
            height="40"
            variant="flat"
          ></v-btn>
  
          <v-avatar
            class="ms-2"
            color="surface-variant"
            rounded
            variant="flat"
          ></v-avatar>
        </div>
  
        <div class="d-flex px-2 my-2 align-center">
          <v-btn
            color="grey-lighten-4"
            variant="flat"
            height="40"
            class="flex-grow-1 me-2"
          ></v-btn>
  
          <v-avatar color="surface-variant" size="18"></v-avatar>
  
          <v-avatar class="ms-1" color="surface-variant" size="18"></v-avatar>
        </div>
  
        <div class="px-2 my-2">
          <v-text-field
            class="mb-4"
            density="compact"
            flat
            hide-details
            prepend-inner-icon="mdi-magnify"
            variant="solo-filled"
          ></v-text-field>
  
          <v-sheet
            class="mb-2"
            color="surface-variant"
            height="24"
            rounded="pill"
            width="50%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="40%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="20%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="90%"
          ></v-sheet>
  
          <v-sheet
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="70%"
          ></v-sheet>
  
          <v-divider class="my-6"></v-divider>
  
          <v-sheet
            class="mb-2"
            color="surface-variant"
            height="24"
            rounded="pill"
            width="30%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="65%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="70%"
          ></v-sheet>
  
          <v-sheet
            class="mb-1"
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="40%"
          ></v-sheet>
  
          <v-sheet
            color="grey-lighten-1"
            height="12"
            rounded="pill"
            width="100%"
          ></v-sheet>
  
          <v-divider class="my-6"></v-divider>
        </div>
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
        <v-container fluid>
          <v-row>
            <v-col v-for="n in 20" :key="n" cols="2">
              <v-sheet color="grey-lighten-1" height="200" rounded></v-sheet>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-app>
  </template>
  
  <script setup>
  import { ref } from "vue";
  const drawer = ref(true);
  </script>
  