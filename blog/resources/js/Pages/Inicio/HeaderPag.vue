<template>
    <div>
        <b-navbar  toggleable="md" type="dark" variant="danger">
            <b-container >
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
                <b-navbar-brand class="mr-4" href="#">{{ titulo }}</b-navbar-brand>

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav>
                        <b-nav-item href="#">Blog</b-nav-item>
                        <b-nav-item href="#">Contacto</b-nav-item>
                    </b-navbar-nav>
                    <b-navbar-nav class="ml-auto">
                        <b-button variant="success">Iniciar sesion</b-button>
                    </b-navbar-nav>
                </b-collapse>
            </b-container>
        </b-navbar>
    </div>
</template>

<script>
export default {
    name: "HeaderPag",
    data() {
        return {
            titulo: "Pagina Web"
        };
    }
};
</script>
