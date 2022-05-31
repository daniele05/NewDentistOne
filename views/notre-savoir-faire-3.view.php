<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3">ici ma page prothèses dentaires fixes ou amovibles</p>

<!-- Start open-hour Area -->
<section class="notre_savoir_faire_2_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap m-3">
                <h3 class="text-primary justify mt-3 pt-3">Notre savoir-faire</h3>
                <a href="template.php"></a>
                <img src="public/asset/img/prothèse dentaire.png" alt="Prothèses dentaires fixes ou amovibles"
                    class=" mt-4 pt-4">
                <h5 class="text-left text-justify text-primary font-weight-bold">
                    Qu'est-ce qu'une prothèse dentaire?
                </h5>
                <p class="text-justify pb-3">
                    Les prothèses amovibles sont un type de restauration dentaire. Comme son nom l’indique, on peut les
                    retirer facilement, ce qui est utile pour certains patients. Communément appelées dentiers, les
                    prothèses dentaires amovibles sont un traitement très populaire. Mais encore faut-il bien connaître
                    ce qu’est une prothèse amovible .
                </p>
                <h5 class="text-left text-primary">Les avantages d'une prothèse dentaire</h5>
                <p class="text-justify pb-3">Quand elles proviennent d’un laboratoire dentaire de confiance, les
                    prothèses amovibles présentent de nombreux avantages. En effet, vous n’avez pas besoin
                    d’intervention chirurgicale, un moyen d’éviter les processus de récupération douloureux.

                    Le patient peut facilement installer sa prothèse dentaire amovible. Elle est soutenue par des tissus
                    dans la cavité buccale. Cela permet de les enlever lorsque vous n’en avez pas besoin.

                    Les prothèses amovibles se destinent donc aux patients qui veulent éviter des chirurgies buccales.
                    Les dents manquantes sont ainsi remplacées pour améliorer la mastication et conserver le tonus
                    musculaire de la mâchoire.
                </p>
                <h5 class="text-left text-primary">Les différentes types de prothèses dentaires</h5>
                <br>
                <h6 class="text-left text-white-50"><img src="public/asset/img/Vector (2).png" alt="vector"> Les
                    prothèses dentaires partielles amovibles</h6>
                <p class="text-justify pb-3">Parmi les prothèses amovibles, les prothèses partielles s’ancrent sur les
                    dents restantes d’un patient. Il faut s’adresser à des laboratoires de prothèses dentaires, ces
                    derniers peuvent concevoir une prothèse grâce aux informations pourvues par un dentiste ou un
                    prosthodontiste. Celui-ci prend les mesures et les empreintes qu’il communique par le biais d’une
                    ordonnance.
                    Les dents de remplacement sont incrustées dans une base généralement faite en plastique. Celle-ci
                    est ensuite attachée à une structure métallique qui se place dans la bouche.
                    Les matériaux employés imitent les gencives : on utilise de la porcelaine, de l’acrylique et une
                    résine acrylique.
                    Les prothèses partielles amovibles s’accrochent aux dents grâce à des crochets. Cela offre une bonne
                    stabilité au quotidien et un rendu esthétique formidable. Ce type de prothèse évite en plus le
                    déplacement des dents restantes.
                </p>
                <h6 class="text-left text-white-50"><img src="public/asset/img/Vector (2).png" alt="vector"> Les
                    prothèses complètes amovibles</h6>
                <p class="text-justify pb-3">Les prothèses dentaires complètes remplacent toutes les dents du patient,
                    que ce soit au niveau du maxillaire supérieur ou inférieur. D’habitude, elles sont fabriquées en
                    résine et sont conçues par les laboratoires dentaires selon le visage du patient.
                    On fabrique les prothèses complètes amovibles suite à la guérison des gencives, après une extraction
                    dentaire. Le patient doit donc attendre avant de porter une prothèse amovible complète.
                    Certaines prothèses complètes appelées « immédiates » offrent la possibilité d’éviter l’attente.
                    Elles sont insérées juste après l’extraction de dents
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