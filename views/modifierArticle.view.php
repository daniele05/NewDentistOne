<?php
ob_start();

?>
<p class="Ici mon formulaire de modification article"></p>

<!-- start form -->

<form method="POST" action="<?= URL ?> article/mv" enctype="multipart/form-data">

    <h4 class="">Modification article: </h4>

    <div class="form-group">
        <label for="idpatient">IdArticle:</label>
        <input type="number" class="form-control" id="idArticle" name="idArticle"
            value="<?= $article->getIdArticle() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="titre">Titre:</label>
        <input type="text" class="form-control" id="titre" name="titre" value="<?= $article->getTitre() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="image">Image:</label>
        <img src="<?= URL ?>public/asset/img/<?= $article->getImage() ?>">
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <br>
    <div class="form-group">
        <label for="image">Changer l'image:</label>
        <img src="<?= URL ?>public/asset/img/<?= $article->getImage() ?>">
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <br>
    <div class="form-group">
        <label for="image">Changer le contenu:</label>
        <input type="text" class="form-control" id="contenu" name="contenu" value="" <?= $article->getContenu() ?>">

    </div>

    <div class=" form-group">
        <label for="created">Created:</label>
        <input type="date" class="form-control" id="created" name="created" value="<?= $article->getCreated() ?>">

    </div>
    <br>

    <br>
    <div class=" form-group">
        <label for="created">IdDentiste:</label>
        <input type="number" class="form-control" id="idDentiste" name="idDentiste"
            value="<?= $article->getIdDentiste() ?>">

    </div>
    <br>

    <button type=" submit" class="btn btn-primary">Modifier</button>
</form>

<br>
<!-- End form -->



<?
$content = ob_clean();
$titre = "Modification fiche article: " . $article->getIdArticle();
require "template.php";


?>