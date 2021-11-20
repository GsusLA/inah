<?php
require("partials/header.php");
?>

<div class="container">
    <br><br>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a aria-controls="nav-home" aria-selected="true" class="nav-item nav-link nav-opt active" data-toggle="tab" href="#nav-home"
                id="nav-home-tab" role="tab" >You Tube  <i class="fab fa-youtube"></i></a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div aria-labelledby="nav-home-tab" class="tab-pane fade show active" id="nav-home" role="tabpanel">
        <h3 class="main-title">Conoce nuestro contenido en YouTube</h3>
            <?php
                require("partials/comunicacion-tabs/tab_videos.php");
            ?>
        </div>
    </div>

</div>

<?php
require("partials/footer.php");
?>

<style>

    .nav-opt{
        color: #7151d1;
    }



</style>
