<?php
require("partials/header.php");
?>

<div class="container" id="comite">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mt-10">
            <h3 class="title-mid"> <span class="fa fa-users ico-color"></span> Comité Ejecutivo SNPICD-INAH 2019-2022</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-lg-3 mt-md-2 mt-6">
            <div class="row"  onMouseOver="this.style.cursor='pointer'" @click="modal(1)" data-toggle="modal" data-target=".modal"> 
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/01.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Gustavo A. Ramírez Castilla </h3>
                    <p>Secretaría General</p>
                </div>    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row"  onMouseOver="this.style.cursor='pointer'" @click="modal(2)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/02.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Daniel Ruiz Cancino </h3>
                    <p>Secretaría de Organización</p>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/logo-inah.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Secretaría de Finanzas </h3>
                    <p></p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(4)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/04.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">María de Lourdes Hernández Jiménez </h3>
                    <p>Secretaría de Escalafón y Promoción</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
                <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(5)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/05.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Elena de la Cruz Canché Manzanero </h3>
                    <p>Secretaría de Trabajo, Conflictos, Previsión y Asistencia Social.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(6)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/06.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Milton Gabriel Hernández García </h3>
                    <p>Secretario de Comunicación y Prensa</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-3 mt-md-2 mt-6">
            <div class="row" onMouseOver="this.style.cursor='pointer'" @click="modal(7)" data-toggle="modal" data-target=".modal">
                <div class="col-3">
                    <div class="text-centered"> <img src="assets/img/comite/07.png" width="100%" class="rounded-circle" alt=""> </div>
                </div>
                <div class="col-9">
                    <h3 class="title-small">Lidia Iris Rodríguez Rodríguez </h3>
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
                            <div class="text-centered"> <img :src="integrantes[integrante].imagen" width="100%" class="rounded-circle" alt=""> </div>
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
                    nombre:'Gustavo A. Ramirez Castilla',
                    cargo:'Secretario General',
                    lugar:'Centro INAH Tamaulipas desde 1997.',
                    imagen:'assets/img/comite/01.png',
                    resumen:"Profesor Investigador Titular C, doctorante en Políticas Públicas por el Institute of Executive Estudies (a distancia). Maestro en Arquitectura especializado en Conservación y Restauración de Monumentos por la ENCRYM y Arqueólogo por la Universidad Veracruzana. Director y creador de la Red Mexicana de Arqueología. Actualmente miembro de la Subcomisión de Admisión del INAH, ha sido suplente del Secretario de Organización de la DII –IA-1, y delegado sindical del Centro INAH Tamaulipas del año 2000 al 2010. Participó en la redacción de los estatutos para la creación del SNPICD-INAH. <br></br>"+
                            "Autor de ocho libros sobre arqueología huasteca, norestense, tamaulipeca y arte rupestre, así como diversos artículos científicos sobre los mismos temas incluyendo patrimonio cultural, legislación y conservación. Ha sido catedrático en la Universidad Veracruzana y Universidad Autónoma de Tamaulipas.  <br></br>"+
                            "También ha fungido como consultor externo de la UNESCO y la UNOPS en temas relativos al combate al tráfico ilícito de bienes culturales en Centroamérica y el Caribe, y conservación y manejo del patrimonio cultural en riesgo de la Cuenca del Río Verde en Jalisco.  <br></br>"
                },
                {
                    nombre:'Daniel Ruiz Cancino',
                    cargo:'Secretario de Organización',
                    lugar:'Centro INAH Jalisco desde 2011',
                    imagen:'assets/img/comite/02.png',
                    resumen:"Profesor investigador Titular B, en el Museo Regional de Guadalajara (MRG). Desde 1994 ha participado en diversos proyectos arqueológicos alrededor del país hasta 2011 que gana la plaza de investigador en el área de arqueología para el MRG en el INAH Jalisco. <br></br>"+
                            "Titular de dos proyectos “Síntesis de la Etapa Lítica en el Occidente de México” y “Sistematización, Optimización y Catalogación del Acervo Arqueológico y Paleontológico del Museo Regional de Guadalajara” coordinador del “Coloquio de Estudios Culturales del Occidente de México” y de la “Catedra Otto Schöndube” responsable de la coordinación editorial de los libros memoriales del Coloquio de estudios interdisciplinares del MRG; ha realizado varios guiones para exposiciones permanentes e itinerantes, dentro de las que destaca “Semillas de Vida. La Sexualidad en el Occidente” de la cual también realizó el libro catálogo. Participó en el seminario de investigación del Centro INAH Jalisco donde también fue coordinador del libro “La Diversidad del Patrimonio Cultural. Investigaciones del centro INAH Jalisco <br></br>"+
                            "Dentro del sindicato desde su incorporación a participado activamente en el centro INAH Jalisco siendo tres veces Delegado y dos Subdelegado, ha formado parte de las comisiones de evaluación y admisión del centro INAH Jalisco. A nivel nacional su actividad sindical se encaminó a ser parte de la Comisión de Patrimonio Cultural y de la Comisión de Prestaciones, dentro de los congresos de investigación ha presentado ponencias denunciando cuestiones relacionadas con el mal manejo en los museos del INAH.<br></br>"
                },
                {
                    nombre:'',
                    cargo:'',
                    lugar:'',
                    imagen:'',
                    resumen:''
                },
                {
                    nombre:'María de Lourdes Hernández Jiménez',
                    cargo:'Secretaria de Escalafón y Promoción',
                    lugar:'Centro INAH Veracruz desde 2000',
                    imagen:'assets/img/comite/04.png',
                    resumen:"Profesora Investigadora Titular “C” del Centro INAH Veracruz desde el 2000. <br></br>"+
                            "Doctorante en Educación superior, con especialidad en Educación Patrimonial del Centro de Estudios Superiores de Veracruz. Maestra en Educación Superior, con especialidad en Metodología de la Enseñanza, del Instituto de Ciencias y Estudios Superiores de Tamaulipas, A. C. Maestrante en Arquitectura Prehispánica de la Escuela Nacional de Conservación, Restauración y Museografía “Manuel de Castillo Negrete” del INAH. <br></br>"+
                            "Ha dirigido varios proyectos de investigación arqueológica, con enfoque regional y patrones de asentamientos en el sur de Veracruz. También ha publicado un libro y varios artículos científicos de sus investigaciones en revistas especializadas del INAH y del CESMECA de la UNICACH de Chiapas, y de divulgación en suplementos y revistas culturales. Actualmente dirige Proyectos de recorridos extensivos y excavaciones en programas de salvamentos arqueológicos. <br></br>"+
                            "Ha sido delegada sindical del centro INAH Veracruz en 2012, actualmente participa en la Comisión Mixta de Año Sabático."
                },
                {
                    nombre:'Elena de la Cruz Canché Manzanero',
                    cargo:'Secretaria de Previsión, Asistencia Social, Trabajo y Conflictos',
                    lugar:'Centro INAH Campeche desde 1992',
                    imagen:'assets/img/comite/05.png',
                    resumen:"Profesora Investigadora Titular A, Maestra en Patrimonio y Desarrollo Sustentable por la Universidad Autónoma de Campeche y Licenciada en Ciencias Antropológicas en la especialidad de Arqueología por la Universidad Autónoma de Yucatán. Premio “Alfonso Caso”, mención honorífica en el área de Arqueología por la tesis de licenciatura: “La secuencia cerámica de Xelhá, Quintana Roo”, otorgado por El Consejo Nacional de las Culturas y Arte a través del Instituto Nacional de Antropología e Historia en 1992. Delegada Sindical del Centro INAH Campeche de 1994 a 1995. <br></br>"+
                            "Ha sido coordinadora del PROCEDE en Campeche; Directora y co-directora de proyectos de investigación arqueológica en el sur y suroeste de Campeche. Ha publicado diversos artículos científicos de patrones de asentamiento y cerámica."
                },
                {
                    nombre:'Milton Gabriel Hernández García',
                    cargo:'Secretario de Comunicación y Prensa',
                    lugar:'Centro INAH Tlaxcala desde 2011',
                    imagen:'assets/img/comite/06.png',
                    resumen:"Es profesor-investigador Titular C en la Sección de Antropología del Centro INAH Tlaxcala. Es etnólogo por la ENAH, maestro y doctor en Desarrollo Rural por la UAM- Xochimilco. En 2008 empezó a colaborar en el Programa Nacional Etnografía de las Regiones Indígenas de México y en 2011 ingresó al INAH como profesor-investigador de tiempo completo. Ha sido distinguido con la Medalla al Mérito Universitario por la Universidad Autónoma Metropolitana. En 2011 ganó el premio a la mejor investigación sobre el campo mexicano que otorga la Asociación Mexicana de Estudios Rurales A.C. (AMER) y en 2019, la mención honorífica por parte de esta misma asociación. <br></br>"+
                            "Es autor de los libros “Historia contemporánea del movimiento indígena en la Sierra Norte de Puebla” y “Entre la barbarie y la esperanza. Luchas campesindias en defensa de la vida”. También es co- coordinador del “Atlas etnográfico del estado de Hidalgo”. <br></br>"+
                            "Ha sido delegado sindical de su centro de trabajo. Ha participado en la Subcomisión de Evaluación, en la Comisión Organizadora del II Congreso Nacional de Investigadores del INAH que se realizó en Tlaxcala en 2018 y en la Comisión Organizadora del 80 aniversario del instituto por parte de nuestro sindicato. <br></br>"
                },
                {
                    nombre:'Lidia Iris Rodríguez Rodríguez',
                    cargo:'Secretaria de Trabajo Externo',
                    lugar:'Centro INAH Guanajuato desde 2015',
                    imagen:'assets/img/comite/07.png',
                    resumen:"Profesora Investigadora titular B, profesora de etnología y arqueología en la ENAH y delegada sindical en Guanajuato de 2016 a 2018, formó parte de la Comisión Legal para el Cambio del Reglamento del Sindicato en 2018.<br></br>"+
                            "Doctora, Maestra y Licenciada en Arqueología por la Escuela Nacional de Antropología e Historia. Doctorante en Antropología Social con especialidad en Antropología Política por la ENAH. Es miembro de las Red Profesional Panamericana del Instituto Panamericano de Geografía e Historia (IPGH). Realizó investigación postdoctoral con la Beca para Mujeres en la Ciencia, área de Humanidades 2017 por el CONACYT, del Consejo Consultivo de Ciencias y la Academia Mexicana de Ciencias. Ha sido docente en la ENAH, la UACM y la Universidad de los Andes en Bogotá.<br></br>"+
                            "Ha realizado investigaciones en diferentes estados de la República, y estancias de investigación en Cuba, Perú, Venezuela, Bolivia, Colombia, Ecuador y Bélgica. Es autora de seis libros y diversos artículos científicos en revistas prestigiadas. Sus llíneas de investigación abarcan derechos culturales, pueblos originarios y patrimonio arqueológico, procesos políticos y de recuperación en las reivindicaciones indígenas, metodologías interdisciplinarias y procesos comunitarios para los estudios de patrimonio, museos escolares y comunitarios, crítica de la UNESCO, turismo y desarrollo sustentable, bioarqueología y filiación étnica prehispánica en el estado de Guanajuato, arqueología forense en casos de desaparición forzada, antropología del Estado y sindicalismo y movimientos sindicales."
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