<?php
require_once "models/Video.class.php";
ob_start();
?>

<p class="mb-5 pb-5 ">
    Ici le contenu de mes vidéos
</p>
<div class="container">



    <h4 class="text-center text-primary mb-4 pb-4">Titre Vidéo:</h4>

    <video controls width="250">

        <img src="" alt="" width="250" height="250">

        <source src="" type="">

        Sorry, your browser doesn't support embedded videos.
    </video>
    <h6 class="text-center mb-4 pb-4">Id Vidéo: </h6>
    <h6 class="text-center">Id Article: </h6>

    <div class="text-center w-100  ">
        <a href="" class="btn btn-success d-block">Ajouter</a>
    </div>
    <br>
    <br>

    <?php
    for ($i = 0; $i < count($videos); $i++) {
    ?>




    <h4 class="text-center text-primary">Titre Vidéo: <?= $videos[$i]->getTitle(); ?></h4>




    <video controls width="250">

        <img src="public/asset/img/<?= $videos[$i]->getImageName(); ?>" alt="bien se brosser les dents" width="250"
            height="250">

        <source src="public/asset/video/<?= $videos[$i]->getLienVideo(); ?>" type="video/mp4">

        Sorry, your browser doesn't support embedded videos.
    </video>
    <h6 class="text-center">Id Vidéo: </h6>
    <h6 class=" text-center">Id Article:<?= $videos[$i]->getIdArticle(); ?> </h6>

    <div class="container mb-3">
        <a href="" class="btn btn-warning ml-3 mb-3 px-2">Modifier</a>
        <a href="" class="btn btn-danger ml-3 mb-3 px-2">Supprimer</a>
    </div>


    <?php
    } ?>

</div>

<?php
$content = ob_get_clean();
$titre = "Mes Vidéos";
require "template.php";
?>