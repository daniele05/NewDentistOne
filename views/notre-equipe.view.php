<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-4 py-4">ici mon équipe médicale</p>




<!-- Start area equipe  -->

<h3 class="text-primary mb-4 pb-4">Equipe médicale</h3>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="public/asset/img/medesma.jpg" class="d-block w-50" alt="bensalah">
            <h4 class="text-primary">Dr ben Salah</h4>
            <p>Chrirurgien dentiste</p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>

        </div>
        <div class=" carousel-item">
            <img src="public/asset/img/ben-salah.jpg" class="d-block w-50" alt="ben-salah">
            <h4 class="text-primary">Dr ben Salah</h4>
            <p>Chrirurgien dentiste</p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>

        </div>
        <div class="carousel-item">
            <img src="public/asset/img/bensalah.png" class="d-block w-50" alt="bensalah">
            <h4 class="text-primary">Dr ben Salah</h4>
            <p>Chrirurgien dentiste</p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>
            <h3>Diplomes</h3>
            <p>Lorem ipsum </p>

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