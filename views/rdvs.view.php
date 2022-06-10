<?php ob_start(); ?>


<h3 class="mb-4 py-5 text-primary">Rendez-vous</h3>
<form class="border py-5">
    <div class="form-row py-5">
        <div class="col">Identité Rendez-vous:
            <input type="number" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-row">
        <div class="col">Date de Rendez-vous:
            <input type="date" class="form-control" placeholder="">
        </div>
    </div>
    <div class="form-row">
        <div class="col">Identité Patient :
            <input type="number" class="form-control" placeholder="">
        </div>
        <div class="col"> Identité Dentiste:
            <input type="number" class="form-control" placeholder="">
        </div>
    </div>
    <br>
    <div class="text-center w-100  ">
        <a href="<?= URL ?>rdvs/a" class="btn btn-success d-block">Ajouter</a>
    </div>

    <br>

    <?php

    for ($i = 0; $i < count($rdvs); $i++) :
    ?>


    <div class="form-row">
        <div class="col">

            <input type="number" class="form-control" placeholder="<?= URL ?>rdvs/r/<?= $rdvs[$i]->getIdRdv(); ?>">

        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">

            <input type="number" class="form-control" placeholder="<?= URL ?>rdvs/r/<?= $rdvs[$i]->getDateRdv(); ?>">

        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $rdvs[$i]->getIdPatient(); ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $rdvs[$i]->getIdDentiste(); ?>">
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row align-items-center justify-content-center"><a
                href="<?= URL ?>rdvs/m/<?= $rdvs[$i]->getIdRdv(); ?>"
                class="btn btn-warning  mr-3 text-center ">Modifier</a>

            <a href="<?= URL ?>rdvs/d/<?= $rdvs[$i]->getIdRdv(); ?>"
                class="btn btn-danger  mr-3 text-center ">Supprimer</a>
        </div>
        <br>
    </div>
    <?php endfor; ?>
</form>



<?php
$content = ob_get_clean();

require "template.php";
?>