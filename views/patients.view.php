<!-- Temporisation par le bais du buffer -->

<?php
require_once "models/Patient.class.php";
ob_start();
?>

<p class="mt-5 pt-5 text-primary">
    Ici le contenu de mon espace Patients
</p>

<!-- tableau en dure -->


<a href="<?= URL ?>patients/a" class="btn btn-success mt-3">Ajouter</a>

<table class="table text-center mb-3" width='100%'>
    <tr class="table -dark">
        <th>Image</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Sex</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Addresse </th>
        <th>Date Inscription Patient</th>

        <th colspan="2">Actions</th>


        <?php
        for ($i = 0; $i < count($patients); $i++) :
        ?>
    </tr>
    <tr>
        <td class="align-middle"><img src="public/asset/img/<?= $patients[$i]->getImage(); ?>" alt="Axel.png"
                width=60px>
        <td class="align-middle"><?= $patients[$i]->getIdPatient(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getIrstName(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getLastName(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getBirthDate(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getSex(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getTel(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getEmail(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getAddress(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getDateIncriptionPatient(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getIdSoinsDentaires(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getIdOrdonnance(); ?></td>

        <td class="align-middle">
            <a href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-warning  mr-3 text-center ">Modifier</a>
        </td>
        <br></br>

        <td class="align-middle">
            <form method="POST" action="<?= URL ?>patients /s/<?= $patients[$i]->getIdPatient(); ?>"
                onSubmit="return confirm('Voulez-vous vraiment supprimer ce patient ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
            <?php endfor; ?>
        </td>
    </tr>
</table>

<a href="#" class="next round">&#8250;</a>

<?php

for ($i = 0; $i < count($patients); $i++) :
?> <?php endfor; ?>
<!-- end Area -->




<?php

$content = ob_get_clean();
$titre = "Espace Patient";
require "template.php"

?>