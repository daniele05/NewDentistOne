<!-- temporisation par le biais du buffer -->
<?php ob_start(); ?>
<p class="Ici mon formulaire de modification rendez-vous"></p>

<!-- start form -->

<form method="POST" action="<?= URL ?> rdv/mv" enctype="multipart/form-data">


    <input type="hidden" name="identifiant" value="<?= $rdv->getIdRdv() ?>">
    <br>
    <div class="form-group">
        <label for="dateRdv"> Date de rendez-vous changé: </label>
        <input type="date" class="form-control" id="dateRdv" name="dateRdv" value="<?= $rdv->getDateRdv() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="irstname">Identité Patient: </label>
        <input type="number" class="form-control" id="idPatient" name="idPatient" value="<?= $rdv->getIdPatient() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="irstname">Identité Dentiste: </label>
        <input type="number" class="form-control" id="idDentiste" name="idDentiste"
            value="<?= $rdv->getIdDentiste() ?>">
    </div>
    <br>
    <div class="text-center w-100  ">
        <a href="" class="btn btn-success d-block">Valider</a>
    </div>

</form>

<br>
<!-- End form -->

<?php
$content = ob_get_clean();
$titre = "Modification fiche rendez-vous:" . $rdv->getIdRdv();
require "template.php";
?>