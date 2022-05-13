<!-- Temporisation par le bais du buffer -->

<?php ob_start(); ?>


<p class="text-monospace m-4 py-4">ici ma page histoire</p>

<!-- Start open-hour Area -->
<section class="notre_histoire-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <h3 class="text-primary">Notre Histoire</h3>
                <img src="public/asset/img/notre_histoire.png" alt="notre_histoire">
                <p class="text-left">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

            </div>
        </div>
    </div>
</section>
<!-- End notre_histoire Area -->


<!-- Start notre_histoire Area -->
<section class="notre-histoire-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 open-hour-wrap">
                <div class="position-absolute">
                    <img src="public/asset/img/localisation.png" alt="localisation">
                    <img src="public/asset/img/Frame 10.png" alt="vecteur">
                </div>
                <h4 class="text-primary"> 2 Av. jean Monnet, 92160 Antony
                </h4>
                <p class="text-center text-primary">
                    Horaires
                </p>
                <a class="open-btn" href="#"> <span class="circle"></span>Ouvert</a>
                <div class="date-list d-flex flex-row justify-content-center">
                    <ul class="colm-1">

                        <li>Lundi</li>
                        <li>Mardi</li>
                        <li>Mercredi</li>
                        <li>Jeudi</li>
                        <li>Vendredi</li>
                        <li>Samedi</li>
                        <li class="font-weight-bold">Dimanche</li>
                    </ul>
                    <ul class="colm-2">
                        <li><span>:</span> 09:00 - 19:00</li>
                        <li><span>:</span> 09:00 - 19:00</li>
                        <li><span>:</span> 09:00 - 19:00</li>
                        <li><span>:</span> 09:00 - 19:00</li>
                        <li><span>:</span> 09:00 - 19:00</li>
                        <li><span>:</span> 09:00 - 13:00</li>
                        <li class="font-weight-bold"><span>:</span> fermé</li>
                    </ul>
                </div>


                <!-- Start blog Area -->
                <section class="transport-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 open-hour-wrap">
                                <h4 class="text-primary">Moyens de transport</h4>

                                <p class="m-3 font-weight-bold">.RER Antony (ligne B)</p>
                                <p class="m-3 font-weight-bold">.Chemin d'Antony (ligne C)</p>
                                <p class="m-3 font-weight-bold">.RER Antony (ligne B)</p>
                            </div>

                            <div class="col-lg-12 open-hour-wrap">
                                <h4 class="text-primary">Parking public</h4>

                                <p class="m-3 font-weight-bold">Place des Anciens combattants - disque requis (gratuit -
                                    durée 2 heures)</p>
                                <p class="m-3 font-weight-bold">2 Av. Armand Guillebaud</p>
                            </div>

                            <div class="col-lg-12 open-hour-wrap">
                                <h4 class="text-primary">Informations pratiques</h4>

                                <p class="m-3 font-weight-bold">.Rez-de-chaussée</p>
                                <p class="m-3 font-weight-bold">.Accès handicapé (ligne B)</p>
                                <p class="m-3 font-weight-bold">.Wifi gratuit</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End  Area -->
            </div>
        </div>
    </div>
</section>
<!-- End notre_histoire Area -->

<!-- Start open-hour Area -->
<section class="equipe-admin-area">
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
</section>
<!-- End notre_histoire Area -->


</body>

</html>
<?php

$content = ob_get_clean();
$titre = "Notre Histoire";
require "template.php";
?>