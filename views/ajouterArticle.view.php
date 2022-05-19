<!-- temporisation du code par e biais du buffer -->

<?php

ob_start();
?>

<p class="text-monospace m-4">ici ajout d'article</p>

<!-- start form -->

<form method="POST" action="<?= URL ?> article/av" enctype="multipart/form-data">

    <div class=" form-group">
        <label for="idArticle">idArticle:</label>
        <input type="number" class="form-control-file" id="number" name="number">
    </div>
    <br>
    <div class="form-group">
        <label for="created">Created:</label>
        <input type="date" class="form-control" id="created" name="created">

    </div>
    <br>
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre">

    </div>
    <br>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image">

    </div>
    <br>
    <div class="form-group">
        <label for="contenu">Contenu:</label>
        <input type="text" class="form-control" id="contenu" name="contenu">

    </div>
    <br>
    <div class="form-group">
        <label for="number">idDentiste:</label>
        <input type="number" class="form-control" id="idDentiste" name="idDentiste">

    </div>
    <br>
    <br>

    <button type="submit" class="btn btn-primary">Publier</button>
</form>
<br>
<!-- End form -->




<?php
$content = ob_get_clean();
$titre = "Ajout d'un article";
require "template.php";

?>