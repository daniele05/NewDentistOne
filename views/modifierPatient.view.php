<!-- temporisation par le biais du buffer -->
<?php ob_start(); ?>
<p class="Ici mon formulaire de modification"></p>

<!-- start form -->

<form method="POST" action="<?= URL ?> patient/mv" enctype="multipart/form-data">

    <h4 class="">Image: </h4>

    <img src="<?= URL ?>public/asset/img/<?= $patient->getImage() ?>" width="100" height="100">
    <br>
    <br>
    <div class="form-group">
        <label for="image">Changer l'image:</label>
        <input type="file" class="form-control-file w-25" id="image" name="image">
    </div>
    <input type="hidden" name="identifiant" value="<?= $patient->getIdPatient() ?>">
    <br>
    <div class="form-group">
        <label for="idpatient">IdPatient:</label>
        <input type="number" class="form-control" id="idPatient" name="idPatient"
            value="<?= $patient->getIdPatient() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="irstname">IrstName:</label>
        <input type="text" class="form-control" id="irstName" name="irstName" value="<?= $patient->getIrstName() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="lastname">LastName:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $patient->getLastName() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="birthdate">Birthdate:</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= $patient->getBirthDate() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="sex">Sex:</label>
        <input type="text" class="form-control" id="sex" name="sex" value="<?= $patient->getSex() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="tel">Tel:</label>
        <input type="number" class="form-control" id="tel" name="tel" value="<?= $patient->getTel() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $patient->getEmail() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" value="<?= $patient->getAddress() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="dateInscriptionPatient">Date Inscription Patient:</label>
        <input type="date" class="form-control" id="dateInscriptionPatient" name="dateInscriptionPatient"
            value="<?= $patient->getDateIncriptionPatient() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="idsoinsdentaires">Id Soins Dentaires:</label>
        <input type="number" class="form-control" id="idSoinsDentaires" name="idSoinsDentaires"
            value="<?= $patient->getIdSoinsDentaires() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="idordonnance">Id Ordonnance:</label>
        <input type="number" class="form-control" id="idOrdonnance" name="idOrdonnance"
            value="<?= $patient->getIdOrdonnance() ?>">

    </div>
    <div class="text-center w-100  ">
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>

<br>
<!-- End form -->

<?php
$content = ob_get_clean();
$titre = "Modification fiche patient:" . $patient->getIdPatient();
require "template.php";
?>