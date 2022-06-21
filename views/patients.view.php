<!-- Temporisation par le bais du buffer -->

<?php
require_once "models/Patient.class.php";
ob_start();
?>

<p class="text-primary">
    Ici le contenu de mon espace Patients
</p>

<!-- tableau en dure -->


<a href="<?= URL ?>patients/a" class="btn btn-success mt-3">Ajouter</a>

<table class="table text-center mb-3" width='100%'>
    <tr class="table -dark">
        <th>Image</th>
        <!-- <th>Identité du Patient</th> -->
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <!-- <th>Sex</th> -->
        <th>Tel</th>
        <th>Email</th>
        <!-- <th>Addresse </th> -->
        <th>Date Inscription Patient</th>
        <!-- <th>soins dentaires</th>
        <th>IdOrdonnance/th> -->
        <th colspan="2">Actions</th>

    </tr>
    <?php for ($i = 0; $i < count($patients); $i++) : ?>
    <tr>
        <td class="align-middle"><img src="public/asset/img/<?= $patients[$i]->getImage(); ?>" alt="Axel.png"
                width=60px>
            <!-- <td class="align-middle"><= $patients[$i]->getIdPatient(); ?></td> -->
        <td class="align-middle"><?= $patients[$i]->getIrstName(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getLastName(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getBirthDate(); ?></td>
        <!-- <td class="align-middle"><= $patients[$i]->getSex(); ?></td> -->
        <td class="align-middle"><?= $patients[$i]->getTel(); ?></td>
        <td class="align-middle"><?= $patients[$i]->getEmail(); ?></td>
        <!-- <td class="align-middle"><= $patients[$i]->getAddress(); ?></td> -->
        <td class="align-middle"><?= $patients[$i]->getDateIncriptionPatient(); ?></td>
        <!-- <td class="align-middle"><= $patients[$i]->getIdSoinsDentaires(); ?></td> -->
        <!-- <td class="align-middle"><= $patients[$i]->getIdOrdonnance(); ?></td> -->

        <td class="align-middle">
            <a href="<?= URL ?>patients/m/<?= $patients[$i]->getIdPatient(); ?>"
                class="btn btn-warning  mr-3 text-center ">Modifier</a>
        </td>
        <br></br>

        <td class="align-middle">
            <form method="POST" action="<?= URL ?>patients/s/<?= $patients[$i]->getIdPatient(); ?>"
                onSubmit="return confirm('Voulez-vous vraiment supprimer ce patient ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>

        </td>
    </tr>
    <?php endfor; ?>
</table>
<br>
<div aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>






<?php

$content = ob_get_clean();
$titre = "Espace Patient";
require "template.php"

?>quire "template.php"

?>