<?php ob_start(); ?>

<div class="row">
    <div class="col-6 mt-3">
        <p>Identité rendez-vous: <?= $rdv->getIdRdv(); ?></p>
        <p>Date de rendez-vous: <?= $rdv->getDateRdv(); ?></p>
        <p>Identité Patient: <?= $rdv->getIdPatient(); ?></p>
        <p>Identité Dentiste: <?= $rdv->getIdDentiste(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = "Afficher rendez-vous";
require "template.php";

?>