<!-- temporisation du code par e biais du buffer -->

<?php ob_start(); ?>

<form method="POST" action="<?= URL ?> ordonnance/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="idOrdonnance">Numéro Ordonnance:</label>
        <input type="number" class="form-control" id="idOrdonnance" name="idOrdonnance">
    </div>
    <br>
    <div class="form-group">
        <label for="datePrescription">Date de prescription:</label>
        <input type="text" class="form-control" id="datePrescription" name="datePrescription">
    </div>
    <br>
    <div class="form-group">
        <label for="nomPatient">Nom du patient:</label>
        <input type="text" class="form-control" id="nomPatient" name="nomPatient">
    </div>
    <br>
    <div class="form-group">
        <label for="prenomPatient">Prénom du patient:</label>
        <input type="text" class="form-control" id="prenomPatient" name="prenomPatient">
    </div>
    <br>
    <div class="form-group">
        <label for="idpatient">Identité Patient:</label>
        <input type="number" class="form-control" id="idPatient" name="idPatient">

    </div>
    <br>
    <div class="form-group">
        <label for="idpatient">Dénomination commerciale du médicament:</label>
        <input type="text" class="form-control" id="denominationCommercialMedicament"
            name="denominationCommercialMedicament">
    </div>
    <br>
    <div class="form-group">
        <label for="idpatient">Identité Dentiste:</label>
        <input type="number" class="form-control" id="idDentiste" name="idDentiste">

    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
    <a href="index">page d'affichage ordonnance.</a>

</form>
<?php
$content = ob_get_clean();
$titre = "Ajouter une ordonnance";
require "template.php"; ?>