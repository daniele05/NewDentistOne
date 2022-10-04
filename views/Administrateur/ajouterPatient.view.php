<!-- temporisation du code par e biais du buffer -->

<?php ob_start(); ?>

<p class="text-monospace text-primary m-4">ici mon formulaire de contact</p>

<!-- start form -->

<form method="POST" action="<?= URL ?>patients/av" enctype="multipart/form-data">

    <div class=" form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" id="img" name="img">
    </div>
    <br>
    <div class="form-group">
        <label for="idpatient">IdPatient:</label>
        <input type="number" class="form-control" id="idPatient" name="idPatient">

    </div>
    <br>
    <div class="form-group">
        <label for="irstname">IrstName:</label>
        <input type="text" class="form-control" id="irstName" name="irstName">

    </div>
    <br>
    <div class="form-group">
        <label for="lastname">LastName:</label>
        <input type="text" class="form-control" id="lastName" name="lastName">

    </div>
    <br>
    <div class="form-group">
        <label for="birthdate">Birthdate:</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate">

    </div>
    <br>
    <div class="form-group">
        <label for="sex">Sex:</label>
        <input type="text" class="form-control" id="sex" name="sex">


    </div>
    <br>

    </select>
    <div class="form-group">
        <label for="tel">Tel:</label>
        <input type="number" class="form-control" id="tel" name="tel">

    </div>
    <br>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email">

    </div>
    <br>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address">

    </div>
    <br>
    <div class="form-group">
        <label for="dateInscription">Date Inscription Patient:</label>
        <input type="date" class="form-control" id="dateInscription" name="dateInscriptionPatient">

    </div>
    <br>
    <div class="form-group">
        <label for="idsoinsdentaires">Id Soins Dentaires:</label>
        <input type="number" class="form-control" id="idSoinsDentaires" name="idSoinsDentaires">

    </div>
    <br>
    <div class="form-group">
        <label for="idordonnace">Id Ordonnance:</label>
        <input type="number" class="form-control" id="idOrdonnance" name="idOrdonnance">

    </div>
    <br>

    <div class="text-center w-100  ">
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>

<br>
<!-- End form -->




<?php
$content = ob_get_clean();
$titre = "Ajouter un patient";
require "template.php"; ?>