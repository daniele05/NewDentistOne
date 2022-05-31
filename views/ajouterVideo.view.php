<!-- temporisation du code par e biais du buffer -->

<?php
ob_start();
?>

<div>
    <h4 class="text-center text-primary">Titre:<?= URL ?><?= $video->getTiTle(); ?></h4>
    <video controls width="250">
        <img src="<?= URL ?>public/asset/img/<?= $video->getImageName(); ?>" width="100" height="100">
        <source src="<?= URL ?>public/asset/img/<?= $video->getLienVideo(); ?>" width="100" height="100" type="mp.4">
        Sorry, your browser doesn't support embedded videos.
    </video>
    <h6 class="text text-left">Id Vidéo:<?= URL ?><?= $video->getIdVideo(); ?>></h6>
    <h6 class="text text-left">Id Article:<?= URL ?><?= $video->getIdArticle(); ?>></h6>

    <button type="submit" class="btn btn-primary">Valider</button>
</div>



<?php
$content = ob_get_clean();
$titre = "Ajouter une vidéo";
require "template.view";
?>