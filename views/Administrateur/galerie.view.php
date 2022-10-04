<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3 text-primary">ici ma page Galerie</p>


<!-- Start open-hour Area -->
<section class="galery-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">

                <!-- <div class="galery-area section-gap"> -->
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="title text-center mb-1">
                                <h3 class="mt-10 text-primary">Galerie</h3>
                            </div>
                        </div>
                    </div>

                    <section class="text-center">
                        <h4 class="text-primary mb-4 pb-4 text-dark">Photos</h4>


                        <div class="row">
                            <div class="active-testimonial-carusel">
                                <div class="single-testimonial item"><a href="public/asset/img/radio_dentaire.jpg"
                                        data-toggle="lightbox" data-gallery="img-gallery"><img class="mx-auto"
                                            src="public/asset/img/radio_dentaire.jpg" class="img-fluid img-thumbnail"
                                            alt="radio_dentaire"></a><br>
                                    <h4 class="text-primary">photo_radio</h4>
                                </div>

                                <div class="single-testimonial item"><a
                                        href="public/asset/img/consultation dentaire enfant.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/consultation dentaire enfant.jpg"
                                            class="img-fluid img-thumbnail" alt="consultation dentaire enfant"></a><br>
                                    <h4 class="text-primary">photo_Consultation</h4>
                                </div>

                                <div class="single-testimonial item"><a
                                        href="public/asset/img/conseil_bien_se_brosser.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/conseil_bien_se_brosser.jpg"
                                            class="img-fluid img-thumbnail" alt="conseils"></a><br>
                                    <h4 class="text-primary">photo_Conseils</h4>
                                </div>
                                <div class="single-testimonial item"><a
                                        href="public/asset/img/intervention_dentaire1.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/intervention_dentaire1.jpg"
                                            class="img-fluid img-thumbnail" alt="intervention_denatire"></a><br>
                                    <h4 class="text-primary">photo_intervention_dentaire1</h4>
                                </div>

                                <div class="single-testimonial item"><a
                                        href="public/asset/img/conseil_bien_se_brosser.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/conseil_bien_se_brosser.jpg"
                                            class="img-fluid img-thumbnail" alt="conseils"></a><br>
                                    <h4 class="text-primary">photo_Conseils</h4>
                                </div>
                                <div class="single-testimonial item"><a
                                        href="public/asset/img/consultation dentaire enfant.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/consultation dentaire enfant.jpg"
                                            class="img-fluid img-thumbnail" alt="consultation dentaire enfant"></a><br>
                                    <h4 class="text-primary">Consultation dentaire enfant</h4>
                                </div>

                                <div class="single-testimonial item"><a
                                        href="public/asset/img/photo_dentiste_en_exercice.jpg" data-toggle="lightbox"
                                        data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/photo_dentiste_en_exercice.jpg"
                                            class="img-fluid img-thumbnail" alt="dentiste en exercice"></a><br>
                                    <h4 class="text-primary">photo_Intervention</h4>
                                </div>
                                <div class="single-testimonial item"><a href="public/asset/img/detartrage.jpg"
                                        data-toggle="lightbox" data-gallery="img-gallery">
                                        <img class="mx-auto" src="public/asset/img/detartrage.jpg"
                                            class="img-fluid img-thumbnail" alt="dentiste en exercice"></a><br>
                                    <h4 class="text-primary">photo_Détartrage</h4>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- </div> -->
                </div>


            </div>
        </div>
    </div>
    </div>


</section>
<!-- End notre_histoire Area -->



<?php

$content = ob_get_clean();
$titre = "Galerie";
require "template.php";
?>