<!-- Temporisation par le bais du buffer -->

<?php
require_once "models/Patient.class.php";

//  appel de la class Manager 



ob_start();
?>

<p class="  m-4 py-4">
    Ici le contenu de mon espace connexion
</p>

<!-- tableau en dure -->

<div class="col-12 bg-light mt-4  p-4">
    <table class="table table-hover mb-4 p-4">

        <thead>
            <tr class="color-dark border">
                <th class="align-middle">Photo</th>
                <th class="align-middle">Idpatient</th>
                <th class="align-middle">Irstname</th>
                <th class="align-middle">lastname</th>
                <th class="align-middle">Birthdate</th>
                <th class="align-middle">Sex</th>
                <th class="align-middle">Tel</th>
                <th class="align-middle">Email</th>
                <th class="align-middle">Address</th>
                <th class="align-middle">Date Inscription Patient</th>
                <th class="align-middle">Id Soins Dentaires</th>
                <th class="align-middle">Id Ordonnance</th>
                <th colspan=" 2">Actions</th>
            </tr>
        </thead>


        <?php
        // $patients = $connexionManager->getPatients();
        // for ($i = 0; $i < count($connexionManager->getPatients()); $i++) :
        for ($i = 0; $i < count($patients); $i++) :
        ?>
        <tr class="#">

            <td class="align-middle"><img src="public/asset/img/<?= $patients[$i]->getPhoto(); ?>" alt="photo"
                    width="50"></td>
            <td class="align-middle"><a
                    href="<?= URL ?>patients/p/<?= $patients[$i]->getIdPatient(); ?>"><?= $patients[$i]->getIdPatient(); ?>
            </td>
            <td class="align-middle"><?= $patients[$i]->getIrstName(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getLastName(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getBirtDate(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getSex(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getTel(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getEmail(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getAddress(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getDateIncriptionPatient(); ?></td>
            <td class="align-middle"><?= $patients[$i]->getIdSoinsDentaires(); ?>

            </td>
            <td class="align-middle"><?= $patients[$i]->getIdOrdonnance(); ?></td>

            <td class="align-middle"><a href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                    class="btn btn-warning">Modifier</a></td>
            <td class="align-middle">
                <form method="POST" action="<?= URL ?>patients/s/<?= $patients[$i]->getIdPatient(); ?>
                    onSubmit=" return confirm ('Voulez-vous vraiment supprimer ce patient?');">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>



        <?php endfor; ?>




    </table>


</div>


<div class="text-center w-100">
    <a href="<?= URL ?>connexion/a" class="btn btn-success ">Ajouter</a>
</div>
<!-- start footer Area -->




<?php

$content = ob_get_clean();
$titre = "Espace Patient";
require "template.php"

?>