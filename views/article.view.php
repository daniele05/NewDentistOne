<<!-- Temporisation par le bais du buffer -->

    <?php
    require_once('models/Article.class.php');
    ob_start();

    ?>


    <p class="text-monospace m-3">ici mon article</p>

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="bg-light"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content m-5">


                    <h3 class=" page-title text-primary mb-2"><?= $value->getTitre() ?></h3>



                    <img src="public/asset/img/<?= $value->getImage() ?>" alt="les prothèses" class="">
                    <p class="text-justify text-align-justify mt-5"><?= $value->getContenu() ?></p>
                    <div class="font-weight-bold right-5">

                        <span class="text-left m-5 font-weight-bold"><?= $value->getCreated() ?></span>

                        <span class="text-left m-5 font-weight-bold"><?= $value->getIdDentiste() ?></span>

                    </div>

                    <div class="">
                        <a href="" class="btn btn-warning m-4">Modifier</a>
                        <a href="" class="btn btn-danger m-4">Supprimer</a>
                        <input type="submit" class="btn btn-success  m-4" value="Envoyer">

                    </div>
                </div>

            </div>
        </div>


    </section>
    <!-- End banner Area -->



    <!-- Section video  -->
    <section class="banner-area relative" id="home">
        <div class="bg-light"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content">
                    <h4 class="text-primary text-center mt-5 pt-5">Vidéo</h4>
                    <p class="text-center mt-3 pt-3 font-weight-bold">Apprendre à bien se brosser les dents </p>
                    <div class="container_video">

                        <video controls="controls" poster="public/asset/img/Rectangle 54.png" class="mt-5 pt-5">
                            <source src="public/asset/video/Brosse-toi les dents avec Sam le Chat.mp4" type="video/mp4">
                            Mettez votre navigateur à jour!!!
                        </video>




                    </div>
                </div>
            </div>
    </section>



    <?php

    $content = ob_get_clean();
    $titre = "blog";
    require "template.php";
    ?>