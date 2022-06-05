<?php ob_start(); ?>


<h3 class="mb-4 py-5">Rendez-vous</h3>
<form method="POST" action="<?= URL ?> rdv/av" enctype="multipart/form-data">
    <div class="form-row py-5">
        <div class="col">Identité Rendez-vous:
            <input type="number" class="form-control" id="idRdv" name="idRdv">
        </div>
    </div>
    <div class="form-row">
        <div class="col">Date de Rendez-vous:
            <input type="date" class="form-control" id="dateRdv" name="dateRdv">
        </div>
    </div>
    <div class="form-row">
        <div class="col">Identité Patient :
            <input type="number" class="form-control" id="idPatient" name="idPatient">
        </div>
        <div class="col"> Identité Dentiste:
            <input type="number" class="form-control" id="idDentiste" name="idDentiste">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
    <a href="index">page d'affichage rendez-vous.</a>

    <br>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajouter un rendez-vous";
require "template.php"; ?>