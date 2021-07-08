<template>
    <b-container fluid>
        <b-row class="text-right">
            <b-col cols="12">
                <b-button
                    class="mt-2"
                    @click="mostrarFormulario = !mostrarFormulario"
                    >crear publicacion</b-button
                >
            </b-col>
        </b-row>
        <b-row>
            <b-col cols="2"></b-col>
            <b-col cols="8">
                <b-card
                    no-body
                    class="overflow-hidden mb-2"
                    style="max-width: 540px"
                >
                    <b-row no-gutters>
                        <b-col md="6">
                            <b-card-img
                                src="https://picsum.photos/400/400/?image=20"
                                alt="Image"
                                class="rounded-0"
                            ></b-card-img>
                        </b-col>
                        <b-col md="6">
                            <b-card-body title="Horizontal Card">
                                <b-card-text>
                                    This is a wider card with supporting text as
                                    a natural lead-in to additional content.
                                    This content is a little bit longer.
                                </b-card-text>
                                <b-button>leer Mas</b-button>
                            </b-card-body>
                        </b-col>
                    </b-row>
                </b-card>
            </b-col>
            <b-col cols="2"></b-col>
        </b-row>

        <div class="ml-2 mr-2">
            <b-modal v-model="mostrarFormulario" title="Nueva publicacion" >
                <b-form v-if="mostrarFormulario">
                    <b-form-textarea
                        class="mb-4"
                        id="contenido"
                        v-model="form.contenido"
                        placeholder="Ingrese el contenido de la publicacion"
                        rows="3"
                        max-rows="6"
                    >
                    </b-form-textarea>

                    <b-form-file
                        class="mb-4"
                        v-model="form.imagenPublicacion"
                        placeholder="Ingrese la imagen de la publicacion"
                        accept=".jpg, .png"
                    ></b-form-file>

                    <b-form-input
                        class="mb-4"
                        v-model="form.nombreAutor"
                        placeholder="Ingrese el nombre del autor de la publicacion"
                    >
                    </b-form-input>

                    <b-form-file
                        class="mb-4"
                        v-model="form.imagenAutor"
                        placeholder="Ingrese la imagen del autor de la publicacion"
                        accept=".jpg, .png"
                    ></b-form-file>
                </b-form>
                <b-button @click="registrarPublicacion">Registrar publicacion</b-button>
            </b-modal>
        </div>
    </b-container>
</template>

<script>
export default {
    name: "ContentPag",
    data() {
        return {
            slide: 0,
            sliding: null,
            mostrarFormulario: false,
            form: {
                contenido: "",
                imagenPublicacion: null,
                nombreAutor: "",
                imagenAutor: null,

            }
        };
    },
    methods: {
        onSlideStart(slide) {
            this.sliding = true;
        },
        onSlideEnd(slide) {
            this.sliding = false;
        },
        registrarPublicacion(){
            console.log("Informacion del formulario");
            console.log("contenido: " + this.form.contenido)
            
            
        },
         onSubmit(evt) {
             console.log("llege")
            evt.preventDefault()
            alert(JSON.stringify(this.form))
      },


    }
};
</script>
