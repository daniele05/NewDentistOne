<!-- Temporisation par le bais du buffer -->

<?php
require_once('models/Blog.class.php');
ob_start();

?>


<p class="text-monospace m-3 p-4 font-weight-bold">ici ma page de blog</p>


<!-- start banner Area -->


<div class="row">
    <?php
    foreach ($articles as $article) :

    ?>

    <article class="col-sm-10 maincontent">

        <header class="page-header mt-3 pt-3 p-3">
            <h4 class="page-title text-primary m-4 p-4">Titre:</h4>
        </header>

        <p class="img-rounded pull right mb-2" width="100" height="100"">Image:</p> <img src="" alt="">
            <p class=" text-justify mb-2">Contenu:</p>
        <p class="text-justify">Created:</p>
        <p class="text-justify">Identité Dentiste:</p>

        <div class="text-center w-100">

            <a href="<?= URL ?>article/a" class="btn btn-success d-block">Publier</a>
        </div>






        <h4 class="page-title text-primary m-4 p-4">Titre:<?= $article['titre'] ?></h4>


        <?php
            // var_dump($article['photo']);
            if ($article['image'] != "" && isset($article["image"])) {

                $lien = URL . "public/asset/img/" . $article['image'];
                echo '<p><img src=' . $lien . ' class="img-rounded pull right" width="100" height="100"></p>';
            }
            ?>
        <p class="text-justify"><?= $article['contenu'] ?></p>
        <p><?= $article['created'] ?></p>
        <p><?= $article['idDentiste'] ?></p>


        <div class="container">
            <div class="row align-items-center justify-content-center"><a
                    href="<?= URL ?>article/update/<?= $article['idArticle'] ?>"
                    class="btn btn-warning  mr-3 text-center ">Modifier</a>

                <a href="<?= URL ?>article/delete/<?= $article['idArticle'] ?>>"
                    class="btn btn-danger  mr-3 text-center ">Supprimer</a>


            </div>
        </div>

    </article>
    <?php

    endforeach; ?>
</div>
</div>




<!-- Section video  -->

<!-- <section class="banner-area relative" id="home">
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
</section> -->




<?php

$content = ob_get_clean();
$titre = "blog";
require "template.php";
?>