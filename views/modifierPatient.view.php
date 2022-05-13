<?
ob_start();
?>
<p class="Ici mon formulaire de modification"></p>

<!-- start form -->

<form method="POST" action="<?= URL ?> patient/mv" enctype="multipart/form-data">

    <h4>Photo: </h4>
    <img src="<?= URL ?>public/asset/img/<?= $patient->getPhoto() ?>">

    <div class=" form-group">
        <label for="image">Changer la photo:</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <br>
    <div class=" form-group">
        <label for="idpatient">IdPatient:</label>
        <input type="number" class="form-control" id="idPatient" name="idPatient" value="<?= $patient->getIdPatient() ?>>

    </div>
    <br>
    <div class=" form-group">
        <label for="irstname">IrstName:</label>
        <input type="text" class="form-control" id="irstName" name="irstName" value="<?= $patient->getIrstName() ?>>

    </div>
    <br>
    <div class=" form-group">
        <label for="lastname">LastName:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $patient->getLastName() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="birthdate">Birthdate:</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= $aptient->getBirthDate() ?>">

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
        <label for="dateInscription">Date Inscription Patient:</label>
        <input type="date" class="form-control" id="dateInscription" name="dateInscription"
            value="<?= $patient->getDateInscription() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="idsoinsdentaires">Id Soins Dentaires:</label>
        <input type="number" class="form-control" id="idSoinsDentaires" name="idSoinsDentaires"
            value="<?= $patient->getIdSoinsDentaires() ?>">

    </div>
    <br>
    <div class="form-group">
        <label for="idordonnace">Id Ordonnance:</label>
        <input type="number" class="form-control" id="idOrdonnance" name="idOrdonnance"
            value="<?= $patient->getIdOrdonnance() ?>">

    </div>
    <br>

    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<br>
<!-- End form -->



<?
$content = ob_clean();
$titre = "Modification fiche patient : " . $patient->getIdPatient();
require "template.php";


?>