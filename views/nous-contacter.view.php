<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-4 py-4">ici ma page de contact</p>

<!-- Start contact Area -->
<section class="contact_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-center text-primary">Nous contacter</h3>
                <p class="text-center font-weight-bold">Prise de rendez-vous.</p>
                <div class="d-flex">

                    <img src="public/asset/img/doctolib_logo.png" alt="doctolib_logo" class="m-3">
                    <a href="hhttps://www.doctolib.fr/dentiste/antony/mohamed-ben-salah" class="mt-4 pt-4">Doctolib</a>


                </div>

                <div class=" d-flex">

                    <img src="public/asset/img/telephone_mini.png" alt="telephone_mini" class="m-3 ">

                    <p class="mt-4 pt-4 text-primary">01 84 19 72 43</p>

                </div>

                <div class="d-flex">

                    <img src="public/asset/img/aerobas.png" alt="e-mail" class="m-3">

                    <a href="mailto::cabinet-antony@hotmail.com?subject=Titre&body=Exemple"
                        class=" mt-4 pt-4">cabinet-antony@hotmail.com</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End notre_histoire Area -->


<?php

$content = ob_get_clean();
$titre = "Nous contacter";
require "template.php";
?>