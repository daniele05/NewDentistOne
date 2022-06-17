<!-- Temporisation par le bais du buffer -->

<?php
require_once "models/Patient.class.php";
ob_start();
?>

<p class="mt-5 pt-5 text-primary">
    Ici le contenu de mon espace Patients
</p>

<!-- tableau en dure -->

<div class="text-left w-100  ">
    <button class=" <?= URL ?>patients/a  btn btn-primary" type="submit">Ajouter</button>
    <!-- <a href="<= URL ?>patients/a" class="btn btn-success d-block">Ajouter</a> -->
</div>

<br>
<table class="table text-center" width='100%'>
    <tr class="table -dark">
        <th>Image</th>
        <th>Id</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Sex</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Addresse </th>
        <th>Date Inscription Patient</th>
        <th>Id soins dentaires</th>
        <th>Id Ordonnance</th>
        <th colspan="2">Actions</th>

        <?php

        for ($i = 0; $i < count($patients); $i++) :
        ?>
    </tr>
    <tr>
        <td><img src="public/asset/img/<?= $patients[$i]->getImage(); ?>" alt="Axel.png" width=60px>
        <td><?= $patients[$i]->getIdPatient(); ?></td>
        <td><?= $patients[$i]->getIrstName(); ?></td>
        <td><?= $patients[$i]->getLastName(); ?></td>
        <td><?= $patients[$i]->getBirthDate(); ?></td>
        <td><?= $patients[$i]->getSex(); ?></td>
        <td><?= $patients[$i]->getTel(); ?></td>
        <td><?= $patients[$i]->getEmail(); ?></td>
        <td><?= $patients[$i]->getAddress(); ?></td>
        <td><?= $patients[$i]->getDateIncriptionPatient(); ?></td>
        <td><?= $patients[$i]->getIdSoinsDentaires(); ?></td>
        <td><?= $patients[$i]->getIdOrdonnance(); ?></td>

        <th colspan="2">
            <a href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-warning  mr-3 text-center ">Modifier</a>
            <br></br>
            <a href="<?= URL ?>patients/d/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-danger  mr-3 text-center ">Supprimer</a>
        </th>
        <?php endfor; ?>

</table>

<?php

for ($i = 0; $i < count($patients); $i++) :
?>


<!-- <div class="form-group mb-4">
    <label for="exampleFormControlFile1"><img src="public/asset/img/<= $patients[$i]->getImage(); ?>" alt="image_photo"
            width=30></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
</div>
<br>

<div class="form-row">
    <div class="col">

        <input type="number" class="form-control"
            placeholder="<= URL ?>patients/p/<= $patients[$i]->getIdPatient(); ?>">

    </div>
</div>
<br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" placeholder="<= $patients[$i]->getIrstName(); ?>">
    </div>

    <div class="col">
        <input type="text" class="form-control" placeholder="<= $patients[$i]->getLastName(); ?>">
    </div>
</div>
<br>
<div class="form-row">

    <div class="col">Date de naissance
        <input type="date" class="form-control" placeholder="<= $patients[$i]->getBirthDate(); ?> ">
    </div>

</div>
<br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" placeholder="<= $patients[$i]->getSex(); ?>">
    </div>
</div>
<br>
<div class="form-row">
    <div class="col">
        <input type="number" class="form-control" placeholder="<= $patients[$i]->getTel(); ?> ">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="<= $patients[$i]->getEmail(); ?>">
    </div>
</div>
<br>
<div class="form-row">
    <div class="col">
        <input type="text" class="form-control" placeholder="<= $patients[$i]->getAddress(); ?>">
    </div>
</div>
<br>
<div class="form-row">
    <div class="col">Date Inscription Patient
        <input type="date" class="form-control" placeholder="<= $patients[$i]->getDateIncriptionPatient(); ?>">
    </div>
</div>
<br>

<div class="form-row">
    <div class="col">
        <input type="number" class="form-control" placeholder="<= $patients[$i]->getIdSoinsDentaires(); ?> ">
    </div>
    <div class="col">
        <input type="number" class="form-control" placeholder="<= $patients[$i]->getIdOrdonnance(); ?>">
    </div>
</div>
<br>

<br>
<div class="container">
    <div class="row align-items-center justify-content-center"><a
            href="<= URL ?>patients/m/<= $patients[$i]->getIdPatient(); ?>"
            class="btn btn-warning  mr-3 text-center ">Modifier</a>

        <a href="<= URL ?>patients/d/<= $patients[$i]->getIdPatient(); ?>"
            class="btn btn-danger  mr-3 text-center ">Supprimer</a>
    </div>
    <br>
</div>
<?php endfor; ?>
 -->






<!-- end Area -->




<?php

    $content = ob_get_clean();
    $titre = "Espace Patient";
    require "template.php"

    ?>