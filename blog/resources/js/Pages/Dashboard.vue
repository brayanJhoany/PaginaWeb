<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <content-pag></content-pag>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import ContentPag from './Inicio/ContentPag.vue';

export default {
  components: {
    AppLayout,
    ContentPag,
  },
  methods:
     {
    // Visiata el perfil del usuario
    visitarPerfilUsuario() {
      this.$inertia.visit(this.route("profile.show"));
    },
  },
};
</script>
