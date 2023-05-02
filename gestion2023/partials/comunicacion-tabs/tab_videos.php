<div class="container" id="app">
    <br>
    <p class="main-desc"> Playlists</p>
    <br>
    <div class="row">
        <div class="col-md-4 mb-1" v-for="(item,i) in playlists">
            <div class="card">
                <div class="card-body" onMouseOver="this.style.cursor='pointer'">
                    <h5 class="card-title"><p class="main-desc">{{item.nombre}}</p> </h5>
                    <p class="main-desc">
                        <img :src="item.image" @click="modal(i)" class="img-tab" alt="Ver" >
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                        <p style="font-size:20px">Ver  <i class="fab fa-youtube" style="font-size:30px;color:red" @click="modal(i)" onMouseOver="this.style.cursor='pointer'"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
</style>
<script>
    $("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
    var app = new Vue({
        el: '#app',
        data: {
            playlists:[
                {
                    nombre:'PLATICAS SOBRE: SALUD, PREVENCIÓN DE ENFERMEDADES Y BUEN USO DEL SGMM',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4hT0Q_ItR1hXhHWltjSN_z0',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4hT0Q_ItR1hXhHWltjSN_z0',
                    code:'PL-y08CK0tW4hT0Q_ItR1hXhHWltjSN_z0',
                    image:'assets/img/yt/img-1.jpeg',
                },
                {
                    nombre:'SEMINARIO CIENCIA FORENSES PARA MENORES DE EDAD',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4jmJyTloiMednIqmZn7kIpe',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4jmJyTloiMednIqmZn7kIpe',
                    code:'PL-y08CK0tW4jmJyTloiMednIqmZn7kIpe',
                    image:'assets/img/yt/img-2.jpeg',
                },
                {
                    nombre:'SEMINARIO PERMANENTE SOBRE RIESGOS Y ANTROPOLOGÍA',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4hu9Pz6QeprpgIQvD7le0vq',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4hu9Pz6QeprpgIQvD7le0vq',
                    code:'PL-y08CK0tW4hu9Pz6QeprpgIQvD7le0vq',
                    image:'assets/img/yt/img-3.jpeg',
                },
                {
                    nombre:'Comisión de protocolo de género',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4jDcda5fof7epkJi_9HlvNV',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4jDcda5fof7epkJi_9HlvNV',
                    code:'PL-y08CK0tW4jDcda5fof7epkJi_9HlvNV',
                    image:'assets/img/yt/img-4.jpeg',
                },
                {
                    nombre:'IV CONGRESO DE INVESTIGADORES DEL SNPICD-INAH',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4hn0rNgxHgvoKZdiS5i9ABV',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4hn0rNgxHgvoKZdiS5i9ABV',
                    code:'PL-y08CK0tW4hn0rNgxHgvoKZdiS5i9ABV',
                    image:'assets/img/yt/img-5.jpeg',
                },
                {
                    nombre:'La investigación en el INAH.',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4iWJBuraxtbBGwFUI27k1pY',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4iWJBuraxtbBGwFUI27k1pY',
                    code:'PL-y08CK0tW4iWJBuraxtbBGwFUI27k1pY',
                    image:'assets/img/yt/img-6.jpeg',
                },
                {
                    nombre:'Musica',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4jzZ3ULMOgz1M6tMq4ZDvdE',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4jzZ3ULMOgz1M6tMq4ZDvdE',
                    code:'PL-y08CK0tW4jzZ3ULMOgz1M6tMq4ZDvdE',
                    image:'assets/img/yt/img-7.jpeg',
                },
                {
                    nombre:'TREN MAYA',
                    link:'https://www.youtube.com/embed/videoseries?list=PL-y08CK0tW4haK-rkdoXizkZHtDcbf9Ur',
                    redirect:'https://youtube.com/playlist?list=PL-y08CK0tW4haK-rkdoXizkZHtDcbf9Ur',
                    code:'PL-y08CK0tW4haK-rkdoXizkZHtDcbf9Ur',
                    image:'assets/img/yt/img-8.jpeg',
                },
            ]
        },
        methods: {
            getLink(link){
                return "https://www.youtube.com/embed/videoseries?list=" . link;
            },
            modal(i){
                //$(this.$refs.imagemodal).modal('show');
                //alert('pandita');
                window.open('view?v='+this.playlists[i].code,'_blank').focus();
            }
        },
    })
</script>