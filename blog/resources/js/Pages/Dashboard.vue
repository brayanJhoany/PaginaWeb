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
                    <welcome />
                    <!-- // nos muestra info -->
                    <!-- {{$page}} -->
                    <!-- <inertia-link :href="route('profile.show')"> go to perfil</inertia-link> -->
                    <!-- <p @click="visitarPerfilUsuario">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eum dolore ratione consequatur, rem animi? 
                        Unde impedit explicabo magnam tempora nisi delectus quidem laboriosam ducimus, odio laborum autem sed sunt.
                    </p> -->
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },methods: {
            // Visiata el perfil del usuario
            visitarPerfilUsuario(){
                this.$inertia.visit(this.route('profile.show'));
            }
        },
    }
</script>
