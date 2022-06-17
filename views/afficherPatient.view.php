<?php ob_start(); ?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/asset/img/<?= $patient->getImage(); ?>" width="100" height="100">
    </div>
    <div class="col-6">
        <p>Prénom: <?= $patient->getIrstName(); ?></p>
        <p>Nom: <?= $patient->getLastName(); ?></p>
        <p>Date de naissance: <?= $patient->getBirthDate(); ?></p>
        <p>Sexe: <?= $patient->getSex(); ?></p>
        <p>Téléphone: <?= $patient->getTel(); ?></p>
        <p>Email: <?= $patient->getEmail(); ?></p>
        <p>Adresse: <?= $patient->getAddress(); ?></p>
        <p>Date d'Inscription Patient: <?= $patient->getDateIncriptionPatient(); ?></p>
        <p>Id Soins Dentaires: <?= $patient->getIdSoinsDentaires(); ?></p>
        <p>Id Ordonnance: <?= $patient->getIdOrdonnance(); ?></p>
    </div>




</div>

<?php
$content = ob_get_clean();
$titre = "Afficher patient";
require "template.php";

?>