<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3">ici ma page de consulation de routine</p>

<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3 p-3">ici ma page consultation de routine</p>

<!-- Start open-hour Area -->
<section class="notre_histoire-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-primary m-3 p-3">Notre savoir faire</h3>
                <a href="template.php"></a>
                <img src="public/asset/img/Urgences dentaires.png" alt="Urgences dentaires " class="m-4 p-4">

                <p class="text-left text-primary font-weight-bold">Quelles sont les âges les plus exposés à la carie ?
                </p>

                <p class="text-justify pb-3">Les âges les plus exposés au risque de carie sont 6, 9, 12, 15 et 18 ans.
                </p>
            </div>

            <div class="col-lg-12 open-hour-wrap mt-3">
                <h5 class="text-left text-primary">Que soigne un dentiste ?</h5>
                <p class="text-justify pb-3"> formation de tartre dans l'espace entre la gencive et les dents résulte du
                    développement de la plaque dentaire bactérienne, qui au fil du temps, se minéralise. Malgré les
                    brossages réguliers, les bactéries ont tendance à proliférer, ce qui peut entraîner une inflammation
                    de la gencive (gingivite). Le détartrage est un examen couramment pratiqué au cabinet dentaire : il
                    consiste à éliminer le tartre accumulé sur les dents, et entre les dents et la gencive, à l'aide
                    d'un instrument de détartrage vibrant à ultrasons. Il est suivi du polissage (indolore) qui permet
                    de nettoyer la plaque dentaire et les rugosités résiduelles.
                </p>
                <p class="text-justify pb-3">Le traitement des caries est également une activité quotidienne du
                    dentiste. La carie est la lésion dentaire la plus courante : cette maladie infectieuse correspond à
                    la dégradation progressive des tissus de la dent. Une mauvaise hygiène bucco-dentaire ou une
                    consommation excessive de sucre peuvent favoriser la prolifération de certaines bactéries qui
                    attaquent l'émail des dents. Deux types de soins sont possibles : un soin consistant à éliminer les
                    tissus ramollis par la carie avec comblement par un matériau adapté, et, à un stade trop avancé, la
                    dévitalisation de la dent. Ce geste réalisé sous anesthésie locale consiste à retirer la pulpe
                    dentaire à l'aide d'instruments très fins et à désinfecter l'intérieur de la dent.
                </p>
                <p class="text-justify pb-3">La pose d'une couronne ou du bridge est réalisée par le dentiste. Une
                    couronne dentaire est une prothèse placée sur une dent abîmée afin de la protéger et éviter son
                    extraction. Elle recouvre la partie visible d'une dent endommagée (par une carie) ou mal formée et
                    sert à la protéger des agressions extérieures. Le bridge remplace une dent manquante à l'aide d'un
                    implant : il s'appuie sur au moins deux dents adjacentes (appelées "dents piliers") qui forment un
                    pont entre l'espace de la dent manquante. Ces deux procédures nécessitent plusieurs visites chez le
                    dentiste afin de préparer et réaliser le soin et peuvent entraîner des douleurs généralement
                    modérées après la pose.
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