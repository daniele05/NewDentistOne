<!-- Temporisation par le bais du buffer -->

<?php
require_once('models/Blog.class.php');
ob_start();

?>


<p class="text-monospace m-3 font-weight-bold">ici ma page de blog</p>


<!-- start banner Area -->


<div class="row">
    <?php
    foreach ($articles as $article) :

    ?>
    <article class="col-sm-10 maincontent">
        <header class="page-header m-4 pt-4 py-4">
            <h4 class="page-title text-primary m-4 p-4"><?= $article['titre'] ?></h4>
        </header>

        <?php
            // var_dump($article['photo']);
            if ($article['image'] != "" && isset($article["image"])) {

                $lien = URL . "public/asset/img/" . $article['image'];
                echo '<p><img src=' . $lien . ' class="img-rounded pull right" width="500"></p>';
            }
            ?>
        <p class="text-justify"><?= $article['contenu'] ?></p>
        <div class="mb-2 text-center">

            <p><?= $article['idDentiste'] ?></p>
            <button type="submit" class="btn btn-primary">Publier</button>
            <a href="<?= URL ?>article/update/<?= $article['idArticle'] ?>" class="btn btn-warning">Modifier</a>
            <a href="<?= URL ?>article/delete/<?= $article['idArticle'] ?>" class="btn btn-danger">Supprimer</a>
        </div>


    </article>
    <?php
    endforeach; ?>
</div>
</div>
<!-- End banner Area -->



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