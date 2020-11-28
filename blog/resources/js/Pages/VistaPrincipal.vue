<template>
   <div>
       <header-pag></header-pag>
       <content-pag></content-pag>
   </div>
</template>

<script>
import HeaderPag from "@/Pages/Inicio/HeaderPag";
import ContentPag from "@/Pages/Inicio/ContentPag";
export default {
    name:"casa",
    components: {ContentPag, HeaderPag},
}
</script>
