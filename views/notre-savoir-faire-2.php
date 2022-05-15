<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-3">ici ma page consultation de routine</p>

<!-- Start open-hour Area -->
<section class="notre_histoire-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-primary">Notre savoir faire</h3>
                <img src="public/asset/img/Urgences dentaires.png" alt="Consultation de routine " class="m-4 p-4">
                <p class="text-left">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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