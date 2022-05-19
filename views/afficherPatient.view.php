<?php

ob_start();
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/asset/img/<?= $patient->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Prénom: </p><?= $patient->getIrstName(); ?>">
        <p>Nom: </p><?= $patient->getLastName(); ?>">
        <p>Date de naissance: </p><?= $patient->getBirtDate(); ?>">
        <p>Sexe: </p><?= $patient->getSex(); ?>">
        <p>Téléphone: </p><?= $patient->getTel(); ?>">
        <p>Email: </p><?= $patient->getEmail(); ?>">
        <p>Adresse: </p><?= $patient->getAddress(); ?>">
        <p>Date d'Inscription Patient: </p><?= $patient->getDateIncriptionPatient(); ?>">
        <p>Id Soins Dentaires: </p><?= $patient->getIdSoinsDentaire(); ?>">
        <p>Id Ordonnance: </p><?= $patient->getIdOrdonnance(); ?>">

    </div>




</div>

<?php
$content = ob_get_clean();
$titre = $patient->getIdPatient();
require "template.php";

?>