<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class=" text-monospace m-3">ici ma page notre savoir-faire</p>

<!-- Start open-hour Area -->
<section class="notre_histoire-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-primary p-3">Notre savoir-faire</h3>
                <a href="template.php"></a>
                <img src="public/asset/img/Implants dentaires.png" alt="implants dentaires">
                <p class="text-justify p-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </div>
        </div>
    </div>
</section>
<!-- End notre_histoire Area -->


<!--<!-- Start Galery Area -->
<section class="galery-area section-gap">
    <div class="container pb-4 mb-3">
        <div class="row d-flex space-between">
            <div class="card" style="width: 12rem;">
                <img src="public/asset/img/Consultation routine.png" class="card-img-top" alt="Consultation de routine">
                <div class="card-body">
                    <h5 class="card-title text-primary">Consultation de routine</h5>
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="notre-savoir-faire-2" class="btn btn-primary">En savoir <img
                            src="public/asset/img/Vector (2).png" alt="arrow" class="m-2"></a>
                </div>
            </div>

            <div class="card" style="width: 12rem;">
                <img src="public/asset/img/Prothèses dentaires.png" class="card-img-top mb-5"
                    alt="prothèses dentaires fixes ou amovibles">
                <div class="card-body">
                    <h5 class="card-title text-primary">prothèses dentaires fixes ou amovibles</h5>
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="notre-savoir-faire-3 " class="btn btn-primary">En savoir <img
                            src="public/asset/img/Vector (2).png" alt="arrow" class="m-2"></a>
                </div>
            </div>

            <div class="card" style="width: 12rem;">
                <img src="public/asset/img/Pédiatrie dentaire.png" class="card-img-top" alt="pédiatrie dentaire">
                <div class="card-body">
                    <h5 class="card-title text-primary">Pédiatrie dentaire</h5>
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="notre-savoir-faire-4" class="btn btn-primary">En savoir <img
                            src="public/asset/img/Vector (2).png" alt="arrow" class="m-2"></a>
                </div>
            </div>

            <div class="card" style="width: 12rem;">
                <img src="public/asset/img/Urgences dentaires.png" class="card-img-top"
                    alt="Urgences dentaires - Caries - Abcès dentaire">
                <div class="card-body">
                    <h5 class="card-title text-primary">Urgences dentaires - Caries - Abcès dentaires</h5>
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and.Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s, when an unknown
                        printer took a galley of type and.</p>
                    <a href="notre-savoir-faire-5" class="btn btn-primary">En savoir <img
                            src="public/asset/img/Vector (2).png" alt="arrow" class="m-2"></a>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- End testomial Area -->


<?php

$content = ob_get_clean();
$titre = "Notre Savoir-faire";
require "template.php";
?>