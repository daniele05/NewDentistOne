<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-4 p-4">ici mon équipe médicale</p>




<!-- Start area equipe  -->

<h3 class="text-primary mb-4 pt-4">Equipe médicale</h3>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active mb-3">
            <img src="public/asset/img/medesma.jpg" class="d-block w-50 mb-3" alt="bensalah">
            <h4 class="text-primary mb-2">Dr ben Salah</h4>
            <p>Chrirurgien dentiste</p>
            <h5 class="text-primary">Diplômes</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>

        </div>
        <div class=" carousel-item">
            <img src="public/asset/img/ben-salah.jpg" class="d-block w-50 mb-3" alt="ben-salah">
            <h4 class="text-primary mb-2">Dr Amar</h4>
            <p>Chrirurgien dentiste</p>
            <h5 class="text-primary">Diplômes</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>

        </div>
        <div class="carousel-item">
            <img src="public/asset/img/téléchargement.jpg" class="d-block w-50 mb-3 pb-4" alt="téléchargement">
            <h4 class="text-primary mb-4">Equipe d'Assistants dentaires</h4>
            <h5 class="text-primary">Diplômes</h5>
            <p class=" text-primary">Titre d'Assistant dentaire</h5>
            <p>En charge de la stérilisation et de l'asepsie au cabinet</p>
            <p>Accueil des patients du cabinet</p>
            <p> Gestion du Planning</p>


        </div>
    </div>
</div>










<!-- End area equipe -->

<!-- Start open-hour Area -->
<!-- <section class="equipe-admin-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-primary">Equipe médicale</h3>
                <img src="public/asset/img/Frame 27.png" alt="equipe_medicale">
                <p class="text-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. At tempus, vestibulum at augue. Integer et
                    ultricies egestas viverra vestibulum. Adipiscing accumsan, mattis hac sagittis. Nunc orci leo sem
                    fermentum. Gravida ultrices praesent turpis ornare eget. Ut et massa adipiscing habitasse commodo
                    elementum urna vitae. Bibendum elit suspendisse magna aliquet hac enim augue a sit. Felis in
                    molestie at amet vulputate sem egestas et, quam. Odio neque elementum facilisis lacinia nascetur
                    enim.
                </p>

            </div>
        </div>
    </div>
</section> -->
<!-- End notre_histoire Area -->


</body>

</html>
<?php

$content = ob_get_clean();
$titre = "Equipe dentaire";
require "template.php";
?>