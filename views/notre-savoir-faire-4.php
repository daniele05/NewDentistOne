<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3">ici ma page pédiatrie dentaire</p>

<!-- Start open-hour Area -->
<section class="notre_savoir_faire_2_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap m-3">
                <h3 class="text-primary justify m-3 p-3">Notre savoir-faire</h3>
                <a href="template.php"></a>
                <img src="public/asset/img/Pédiatrie dentaire.png" alt="pédiatrie dentaire" class="m-4 p-4">
                <p class="text-left text-justify font-weight-bold">
                    le sourire de votre enfant étant unique, le cabinet prend en charge tous les enfants et les
                    adolescents et propose une prise en charge optimal réunissant des multi compétences.
                </p>
                <br>
                <h5 class="text-left text-primary">Prévention dentaire pédiatrique</h5>
                <p class="text-justify pb-3">La période de carie est très active chez l’enfant et l’adolescent.</p>
                <h5 class="text-left text-primary">Suivi adapté aux enfants</h5>
                <p class="text-justify mt-4">
                <ul class="text-justify mb-3 pb-3">
                    <li class="font-weight-bold mb-1 pb-1">Dépistage des caries</li>
                    <li class="font-weight-bold mb-1 pb-1">Enseignement personnalisé à bien se brosser les dents adapté
                        à
                        chaque enfant </li>
                    <li class="font-weight-bold mb-1 pb-1">Encourager à developper de bonnes habitudes pour prévenir les
                        caries</li>
                    <li class="font-weight-bold mb-1 pb-1">Conseils de prévention de carie</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End notre_histoire Area -->





<?php

$content = ob_get_clean();
$titre = "Notre Savoir-faire";
require "template.php";
?>