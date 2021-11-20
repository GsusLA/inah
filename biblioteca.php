<?php
require("partials/header.php");
?>

<div class="container">
    <br><br>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a aria-controls="nav-profile" aria-selected="false" class="nav-item nav-link nav-opt active" data-toggle="tab"
                href="#nav-profile" id="nav-profile-tab" role="tab" >Biblioteca <i class="fa fa-book"></i> </a>
            <a aria-controls="nav-contact" aria-selected="false" class="nav-item nav-link nav-opt " data-toggle="tab" href="#nav-contact"
                id="nav-contact-tab" role="tab" >Hemeroteca <i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div aria-labelledby="nav-profile-tab" class="tab-pane fade show active" id="nav-profile" role="tabpanel">
            <h3 class="main-title">Próximamente</h3>
        </div>
        <div aria-labelledby="nav-contact-tab" class="tab-pane fade" id="nav-contact" role="tabpanel" style="display:block;">
            <h3 class="main-title">Próximamente</h3>
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
