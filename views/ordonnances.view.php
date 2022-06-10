<?php
require "Ordonnance.class.php";
ob_start(); ?>

<p class="mb-5 pb-5 text-primary">
    Ici mes ordonnances
</p>


<div class="row">
    <div class="col-6">
        <p class="#">Numéro Ordonnance: </p>
        <p class="#">Date de prescription: </p>
        <p class="#">Nom du patient: </p>
        <p class="#">Prénom du patient: </p>
        <p class="#">Identité Patient: </p>
        <p class="#">Dénomination commerciale du médicament: </p>
        <p class="#">Identité Dentiste: </p>

        <a href="" class="btn btn-success">Ajouter</a>

        <p class="#">Numéro Ordonnance: </p>
        <p class="#">Date de prescription: </p>
        <p class="#">Nom du patient: </p>
        <p class="#">Prénom du patient: </p>
        <p class="#">Identité Patient: </p>
        <p class="#">Dénomination commerciale du médicament: </p>
        <p class="#">Identité Dentiste: </p>

        <br /><br />

        <a href="<?= URL ?>ordonnances/m/<?= $ordonnances[$i]->getIdPatient(); ?>"
            class="btn btn-warning mr-3 text-center">Modifier</a>
        <a href="<?= URL ?>ordonnances/d/<?= $ordonnances[$i]->getIdPatient(); ?>"
            class="btn btn-danger mr-3 text-center">Supprimer</a>
    </div>
</div>




<?php
$content = ob_end_clean();
$titre = "Ordonnance patient";
require "template.php";
?>