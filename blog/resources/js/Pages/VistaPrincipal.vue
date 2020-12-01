<template>
   <div>
       <header-pag></header-pag>
       <content-pag></content-pag>
           <footer-pag class="footer"></footer-pag>
   </div>
</template>

<script>
import HeaderPag from "@/Pages/Inicio/HeaderPag";
import ContentPag from "@/Pages/Inicio/ContentPag";
import FooterPag from './Inicio/FooterPag.vue';
export default {
    name:"VistaPrincipañ",
    components: {ContentPag, HeaderPag,FooterPag},
}
</script> 
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>