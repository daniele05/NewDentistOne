<?php ob_start(); ?>

<div class="row">
    <div class="col-6">
        <p class="#">Numéro Ordonnance:<?= $ordonnance->getIdOrdonnance(); ?> </p>
        <p class="#">Date de prescription: <?= $ordonnance->getDatePrescription(); ?></p>
        <p class="#">Nom du patient: <?= $ordonnance->getNomPatient(); ?> </p>
        <p class="#">Prénom du patient: <?= $ordonnance->getPrenomPatient(); ?></p>
        <p class="#">Identité Patient: <?= $ordonnance->getIdPatient(); ?></p>
        <p class="#">Dénomination commerciale du médicament: <?= $ordonnance->getDenominationCommercialMedicament(); ?>
        </p>
        <p class="#">Identité Dentiste: <?= $ordonnance->getIdDentsite(); ?></p>
    </div>

</div>




<?php
$content = ob_get_clean();
$titre = "Afficher ordonnance";
require "template.php";

?>