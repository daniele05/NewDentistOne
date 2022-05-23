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

                        <h4 class="text-primary mb-5 p-5">Vidéo</h4>
                        <p class="brosser text-center"> </p>
                        <div class="container_video mt-3">

                            <video controls="controls" poster="">
                                <source src="" type="">

                            </video>

                        </div>
                    </div>
                    <a href="" class="btn btn-success d-block">Play</a>

                    <div class="container">

                        <h4 class="text-primary mb-5 p-5">Vidéo</h4>
                        <p class="brosser text-center">Implants dentaires </p>
                        <div class="container_video mt-3">

                            <video controls="controls" poster="public/asset/img/Rectangle 70.png">
                                <source src="public/asset/video/Implants Dentaires.mp4" type="video/mp4">
                                Mettez votre navigateur à jour!!!
                            </video>

                        </div>
                        <a href="" class="btn btn-warning">Modifier</a>
                        <a href="" class="btn btn-danger">Supprimer</a>

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
$titre = "Vidéo";
require "template.php";
?>