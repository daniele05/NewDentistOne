<?php
require "Ordonnance.class.php";
ob_start(); ?>

<div>
    <h6 class="">Titre Ordonnance:</h6>
    <p class="">Contenu:</p>
    <p class="">Numéro Ordonnance:</p>
    <p class="">Identité Patient:</p>
    <p class="">Identité Dentiste:</p>

    <a href="" class="btn btn-success">Ajouter</a>

    <h6 class="">Titre Ordonnance:</h6>
    <p class="">Contenu:</p>
    <p class="">Numéro Ordonnance:</p>
    <p class="">Identité Patient:</p>
    <p class="">Identité Dentiste:</p>

    <a href="" class="btn btn-warning">Modifier</a>
    <a href="" class="btn btn-danger">Supprimer</a>

</div>




<?php
$content = ob_end_clean();
$titre = "Ordonnance patient";
require "template.php";
?>