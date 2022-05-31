<?php
require "Ordonnance.class.php";
ob_start(); ?>

<div>
    <h6 class="">Titre Ordonnance:</h6>
    <p class="">Contenu:</p>
    <p class="">Numéro Ordonnance:</p>
    <p class="">Identité Patient:
        <input type="hidden">
    </p>
    <p class="">Identité Dentiste:
        <input type="hidden">
    </p>

    <a href="" class="btn btn-success">Ajouter</a>

    <h6 class="">Titre Ordonnance:</h6>
    <p class="">Contenu:</p>
    <p class="">Numéro Ordonnance:</p>
    <p class="">Identité Patient:</p>
    <input type="hidden" name="MAX_FILE_SIZE">
    <p class="">Identité Dentiste:</p>
    <input type="hidden" name="MAX_FILE_SIZE">
    <br /><br />

    <a href="<?= URL ?>ordonnances/m/<?= $ordonnances[$i]->getIdPatient(); ?>"
        class="btn btn-warning mr-3 text-center">Modifier</a>
    <a href="<?= URL ?>ordonnances/d/<?= $ordonnances[$i]->getIdPatient(); ?>"
        class="btn btn-danger mr-3 text-center">Supprimer</a>

</div>




<?php
$content = ob_end_clean();
$titre = "Ordonnance patient";
require "template.php";
?>