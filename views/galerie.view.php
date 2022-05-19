<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3">ici ma page galérie</p>


<!-- Start open-hour Area -->
<section class="galery-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">

                <div class="galery-area section-gap">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="menu-content pb-60 col-lg-8">
                                <div class="title text-center mb-1">
                                    <h3 class="mb-10 text-primary">Galérie</h3>
                                </div>
                            </div>
                        </div>

                        <section class="text-center">
                            <h4 class="text-primary mb-4">Photos</h4>


                            <div class="row">
                                <div class="active-testimonial-carusel">
                                    <div class="single-testimonial item">
                                        <img class="mx-auto  text-h-70" src="public/asset/img/photo_galerie2.png"
                                            alt="photo">

                                        <h4>Photo_Galérie</h4>
                                        <p class="m-1">
                                            Photo0
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo1_Galérie</h4>
                                        <p class="m-1">
                                            photo
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo2_Galérie</h4>
                                        <p class="m-1">
                                            photo2
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo3_Galérie</h4>
                                        <p class="m-1">
                                            photo3
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo4_Galérie</h4>
                                        <p class="m-1">
                                            photo4
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo5_Galérie</h4>
                                        <p class="m-1">
                                            photo5
                                        </p>
                                    </div>

                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo6_Galérie</h4>
                                        <p class="m-1">
                                            photo6
                                        </p>
                                    </div>
                                    <div class="single-testimonial item">
                                        <img class="mx-auto" src="public/asset/img/photo_galerie2.png" alt="photo">

                                        <h4>photo5_Galérie</h4>
                                        <p class="m-1">
                                            photo5
                                        </p>
                                    </div>


                                </div>
                            </div>

                        </section>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


</section>
<!-- End notre_histoire Area -->



<?php

$content = ob_get_clean();
$titre = "Galérie";
require "template.php";
?>