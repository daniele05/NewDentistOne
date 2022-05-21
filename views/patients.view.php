<!-- Temporisation par le bais du buffer -->

<?php
require_once "models/Patient.class.php";

//  appel de la class Manager 
ob_start();
if (!empty($_SESSION['alert'])) :
?>
<div class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
    <?= $_SESSION['alert']['msg'] ?>
</div>

<?php
    unset($_SESSION['alert']);
endif;
?>

<p class="mb-5 pb-5 ">
    Ici le contenu de mon espace connexion
</p>

<!-- tableau en dure -->


<form class="py-5 border-dark">
    <div class="form-group mb-4">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <br>


    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control" placeholder="IdPatient">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Prénom">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="Nom">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">Date de naissance
            <input type="date" class="form-control" placeholder="Date de naissance ">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Sexe">
        </div>
    </div>
    <br>

    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control" placeholder="Téléphone ">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Email">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Addresse">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">Date d'Inscription Patient
            <input type="date" class="form-control" placeholder="Date d'Inscription Patient">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control" placeholder="Id Soins Dentaires ">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Id ordonnance">
        </div>
    </div>
    <br>

    <div class="text-center w-100  ">
        <a href="<?= URL ?>patients/a" class="btn btn-success d-block">Ajouter</a>
    </div>

    <br>

    <?php

    for ($i = 0; $i < count($patients); $i++) :
    ?>

    <div class="form-group mb-4">
        <label for="exampleFormControlFile1"><img src="public/asset/img/<?= $patients[$i]->getImage(); ?>"
                alt="image_photo" width=30></label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <br>

    <div class="form-row">
        <div class="col">

            <input type="number" class="form-control"
                placeholder="<?= URL ?>patients/p/<?= $patients[$i]->getIdPatient(); ?>">

        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $patients[$i]->getIrstName(); ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $patients[$i]->getLastName(); ?>">
        </div>
    </div>
    <br>
    <div class="form-row">

        <div class="col">Date de naissance
            <input type="date" class="form-control" placeholder="<?= $patients[$i]->getBirthDate(); ?> ">
        </div>

    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $patients[$i]->getSex(); ?>">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control" placeholder="<?= $patients[$i]->getTel(); ?> ">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $patients[$i]->getEmail(); ?>">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="<?= $patients[$i]->getAddress(); ?>">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">Date Inscription Patient
            <input type="date" class="form-control" placeholder="<?= $patients[$i]->getDateIncriptionPatient(); ?>">
        </div>
    </div>
    <br>

    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control" placeholder="<?= $patients[$i]->getIdSoinsDentaires(); ?> ">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="<?= $patients[$i]->getIdOrdonnance(); ?>">
        </div>
    </div>
    <br>

    <br>
    <div class="container">
        <div class="row align-items-center justify-content-center"><a
                href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-warning  mr-3 text-center ">Modifier</a>

            <a href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-danger  mr-3 text-center ">Supprimer</a>
        </div>
        <br>
    </div>
    <?php endfor; ?>
</form>






<!-- end Area -->




<?php

$content = ob_get_clean();
$titre = "Espace Patient";
require "template.php"

?>