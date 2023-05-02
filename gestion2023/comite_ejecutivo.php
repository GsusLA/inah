<?php
require("partials/header.php");
?>

<div class="container" id="comite">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mt-10">
            </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-lg-3 mt-md-2 mt-6">
            <div class="row"  onMouseOver="this.style.cursor='pointer'" @click="modal(1)" data-toggle="modal" data-target=".modal"> 
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small"> <span class="fa fa-users ico-color"></span> Comité Ejecutivo SNPICD-INAH 2019-2022</h3>
        
                    <h3 class="title-small">Alberto Juan Herrera Muñoz </h3>
                    <p>Secretaría General</p>
                </div>    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row"  onMouseOver="this.style.cursor='pointer'" @click="modal(2)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Liliana Torres Sanders </h3>
                    <p>Secretaría de Organización</p>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(3)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Victor Igor Quintana Cruz </h3>
                    <p>Secretaría de Finanzas</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(4)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Alejandro Medina Ávila </h3>
                    <p>Secretaría de Escalafón y Promoción</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
                <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(5)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Ricardo Armando Martínez Magaña </h3>
                    <p>Secretaría de Previsión, Asistencia Social, Trabajo y Conflictos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(6)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">María Cecilia de la Paz Vázquez Ahumada </h3>
                    <p>Secretario de Comunicación y Prensa</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(7)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah-t.png" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Rubén Escartín Adam  </h3>
                    <p>Secretaría de Trabajo Externo</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" ref="modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 offset-md-1">
                            <div class="text-centered"> <img :src="integrantes[integrante].imagen" width="100%" class="rounded-circle" alt="" style="background-color: #C32E26;"> </div>
                        </div>
                        <div class="col-md-8 col-sm-12 my-auto">
                            <h3 class="modal-title-mid"><span v-html="integrantes[integrante].nombre"></span></h3>
                            <h4 class="modal-title-small"><span v-html="integrantes[integrante].cargo"></span></h4>
                            <h5 class="modal-title-small-lc"><span v-html="integrantes[integrante].lugar"></span></h5>
                        </div> 
                    </div>
                    <span>
                        <p style="text-align: justify;" class="mt-4"><span v-html="integrantes[integrante].resumen"></span></p>
                    </span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require("partials/footer.php");
?>

<script>
    var app = new Vue({
        el: '#comite',
        data: {
            integrante:0,
            integrantes:[
                {
                    nombre:'Alberto Juan Herrera Muñoz',
                    cargo:'Secretario General',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:"<br></br>"
                },
                {
                    nombre:'Liliana Torres Sanders',
                    cargo:'Secretario de Organización',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:"<br></br>"
                },
                {
                    nombre:'Victor Igor Quintana Cruz',
                    cargo:'Secretaría de Finanzas',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:''
                },
                {
                    nombre:'Alejandro Medina Ávila',
                    cargo:'Secretaria de Escalafón y Promoción',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:""
                },
                {
                    nombre:'Ricardo Armando Martínez Magaña',
                    cargo:'Secretaría de Previsión, Asistencia Social, Trabajo y Conflictos',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:""
                },
                {
                    nombre:'María Cecilia de la Paz Vázquez Ahumada',
                    cargo:'Secretario de Comunicación y Prensa',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:"<br></br>"
                },
                {
                    nombre:'Rubén Escartín Adam',
                    cargo:'Secretaria de Trabajo Externo',
                    lugar:'',
                    imagen:'assets/img/logo-inah-t.png',
                    resumen:""
                },
            ]
        },
        methods: {
            modal(i){
                jQuery.noConflict();
                this.integrante = i-1;
                $('#modal').modal('show');
            },
        },
    })
</script>