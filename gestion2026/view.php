<?php
require("partials/header.php");
?>

<div class="container">
    <br />
    <br />
    <div class="row">
        <iframe width="560" height="500" src="https://www.youtube.com/embed/videoseries?list=<?php echo $_GET['v']; ?>" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<?php
require("partials/footer.php");
?>