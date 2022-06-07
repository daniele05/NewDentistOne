<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= URL ?>public/asset/img/logo_ajust.png>
    <!-- Author Meta  -->
    <meta name=" author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="<= $page_description; ?>">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?= $page_title; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">


    <!-- img favicon -->
    <link rel=" apple-touch-icon" sizes="180x180" href="<?= URL ?>public/asset/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= URL ?>public/asset/img/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= URL ?>public/asset/img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- css boostrap -->
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/linearicons.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/nice-select.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/animate.min.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/main.css">
    <?php
    if (!empty($page_css)) : ?>
    <?php foreach ($page_css as $fichier_css) : ?>
    <link href="<?= URL ?>public/asset/css/<? $fichier_css ?>" rel="stylesheet">
    <?php endforeach; ?>
    <?php endif; ?>


    <!-- css personnalisé -->
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/style.css">


</head>

<body>
    <header id="header" id="home" class="mx-5 px-5 mb-5">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                        <h3 class="text-primary">Cabinet dentaire d'Antony</h3>
                        <a href="index.php"><img src="<?= URL ?>public/asset/img/logo_ajust.png" alt="logo_site"
                                class="float-left" /></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                        <a class="btns text-primary" href="tel:+331 84 19 72 43">+331 84 19 72 43</a>
                        <a class="btns text-primary" href="<?= URL ?>web:https://www.doctolib.fr"
                            target="_blank">www.doctolib.fr</a>
                        <a class="icons" href="tel:+331 84 19 72 43">
                            <span class="lnr lnr-phone-handset text-primary"></span>
                        </a>
                        <!-- <a class="icons text-primary" href="mailto:cabinet-antony@hotmail.com">
                            <span class="lnr lnr-envelope text-primary"></span>
                        </a> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu w-100">
            <div class="row align-items-center justify-content-between d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?= URL ?>Home">Home</a></li>
                        <li class="menu-has-children"><a href="<?= URL ?>notre-histoire">Notre Histoire</a>

                            <ul>

                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>notre-equipe">Notre équipe</a>
                                </li>

                            </ul>

                        </li>

                        <li class="menu-has-children"><a href="#">Savoir-faire</a>
                            <ul>

                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>notre-savoir-faire-1">Implants
                                        dentaires</a></li>
                                <li class="nav-items"><a class="nav-link"
                                        href="<?= URL ?>notre-savoir-faire-2">Consultation de
                                        routine </a></li>
                                <li class="nav-items"><a class="nav-link"
                                        href="<?= URL ?>notre-savoir-faire-3">Prothèses
                                        dentaires fixes ou amovibles
                                        dentaire</a></li>
                                <li class="nav-items"><a class="nav-link"
                                        href="<?= URL ?>notre-savoir-faire-4">Pédiatrie
                                        dentaire</a></li>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>notre-savoir-faire-5">Urgences
                                        dentaires-Caries-Abcès dentaires </a></li>
                            </ul>
                        </li>

                        <li class="nav-items">
                            <a class="nav-link" href="nous-contacter">Contact</a>
                        </li>

                        <li class="menu-has-children"><a href="#">Patients</a>
                            <ul>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>patients">Espace Connexion
                                        Patients</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#">Rendez-vous</a>
                            <ul>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>rdvs"> Mes rendez-vous
                                    </a></li>
                            </ul>
                        </li>



                        <li class="menu-has-children"><a href="blog">Blog</a></li>


                        <li class="menu-has-children"><a href="#">Galerie</a>

                            <ul>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>leCabinetEnPhotos">Le
                                        cabinet en photos </a></li>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>galerie">Interventions</a>
                                </li>

                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>videos">Vidéos
                                    </a></li>

                            </ul>

                        </li>

                        <li class="nav-items"><a class="nav-items" href="<? URL ?>">Ordonnances</a>
                            <ul>
                                <li><a class="btn" href="<?= URL ?>">Vous Connecter</a></li>
                                <li><a class="btn" href="<?= URL ?>login">Login</a></li>
                            </ul>
                        </li>

                        <li class="nav-items"><a class="nav-link" href="mentions">Mentions</a></li>

                    </ul>
                </nav><!-- #nav-menu-container -->

                <div class="menu-social-icons">
                    <a href="#"><i class="fa fa-facebook m-2"></i></a>

                    <a href="#"><i class="fa fa-twitter m-2"></i></a>

                </div>
            </div>
        </div>



    </header>

    <!-- mettre dans uen div juste pour les marges -->
    <div class="container">
        <?= $content ?>
    </div>

    <!-- start footer Area -->

    <footer class="d-flex bg-light pt-5">
        <!-- grid container -->
        <div class="container d-flexp-2">
            <!-- grid row -->
            <div id="row">
                <!-- grid -->
                <div class="row col ms-auto ms-auto">
                    <div class="col  px-6 px-ml-auto font-weight-bold dark">Tarifs et remboursements</div>
                    <div class="col text-primary py-6 ml-6">Nous Contacter</div>
                </div>
                <div class="w-100"></div>
                <div class="row col ms-auto">
                    <div class="col py-6 px-ml-auto font-weight-bold dark">Notre blog</div>
                    <div class="col text-primary py-6 ml-6">Mentions légales</div>

                </div>

                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>

        </div>

    </footer>
    <!-- End footer Area -->

    <script src="<?= URL ?>public/asset/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="<?= URL ?>public/asset/js/vendor/bootstrap.min.js"></script>
    <script type="<?= URL ?>public/asset/text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?= URL ?>public/asset/js/easing.min.js"></script>
    <script src="<?= URL ?>public/asset/js/hoverIntent.js"></script>
    <script src="<?= URL ?>public/asset/js/superfish.min.js"></script>
    <script src="<?= URL ?>public/asset/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= URL ?>public/asset/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= URL ?>public/asset/js/jquery-ui.js"></script>
    <script src="<?= URL ?>public/asset/js/owl.carousel.min.js"></script>
    <script src="<?= URL ?>public/asset/js/jquery.nice-select.min.js"></script>
    <script src="<?= URL ?>public/asset/js/mail-script.js"></script>
    <script src="<?= URL ?>public/asset/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
        integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= URL ?>public/asset/js/scripts.js"></script>
</body>

</html>