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
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?= $titre ?></title>

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



    <!-- css personnalisé -->
    <link rel="stylesheet" href="<?= URL ?>public/asset/css/style.css">
    <!--css login-->


<body>
    <header id="header" id="home" class="mx-5 px-5 mb-5">
        <div class="header-top m-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                        <h3 class="text-primary">Cabinet dentaire d'Antony</h3>
                        <a href="index.php"><img src="<?= URL ?>public/asset/img/logo_ajust.png" alt="logo_site"
                                class="float-left" /></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                        <a class="btns text-primary" href="tel:+331 84 19 72 43">+331 84 19 72 43</a>
                        <a class="btns text-primary" href="https://www.doctolib.fr/dentiste/antony/mohamed-ben-salah"
                            target="_blank">www.doctolib.fr</a>
                        <a class="icons" href="tel:+331 84 19 72 43">
                            <!-- <span class="lnr lnr-phone-handset text-primary"></span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu w-100">
            <div class="row align-items-center justify-content-between d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?= URL ?>home">Home</a></li>
                        <li class="menu-has-children"><a href="<?= URL ?>notre-histoire">Notre Histoire</a>
                            <ul>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>notre-equipe">Notre
                                        équipe</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-has-children m-0"><a href="#">Notre Savoir-faire</a>
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
                            <a class="nav-link" href="nous-contacter">Nous contacter</a>
                        </li>
                        <!-- <li class="nav-items"><a class="nav-items" href="< URL ?>">Ordonnances</a> -->
                        <!-- <ul>
                                <li><a class="btn" href="<?= URL ?>">Vous Connecter</a></li>
                                <li><a class="btn" href="<?= URL ?>login">Login</a></li>
                            </ul> -->

                        <!-- <li class="menu-has-children"><a href="blog">Blog</a></li> -->
                        <li class="menu-has-children"><a href="#">Galerie</a>
                            <ul>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>leCabinetEnPhotos">Le
                                        cabinet en photos </a></li>
                                <li class="nav-items"><a class="nav-link" href="<?= URL ?>galerie">Interventions</a>
                                </li>

                                <!-- <li class="nav-items"><a class="nav-link" href="<= URL ?>videos">Vidéos
                                    </a></li> -->

                            </ul>
                        </li>


                        <!-- pas connecté  -->

                        <?php if (!Securite::estConnecte()) : ?>
                        <li class="menu-has-children"> <a class="nav-link" href="<?= URL ?>login"><img
                                    src="public /asset/img/ps_padlock.png" alt="espace
                                connexion" class="text-white mb-2"> Mon espace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>creerCompte">CreerCompte</a>
                        </li>
                        </li>
                        <!-- si connecter  -->
                        <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>compte/profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>compte/deconnexion">Se déconnecter</a>
                        </li>
                        <?php endif; ?>
                        <?php if (Securite::estConnecte() && Securite::estAdministrateur()) : ?>
                        <li class="nav-item dropdowwn">
                            <a class="nav-link dropdown" href="#">
                                Administration
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= URL ?>administrateur/droits">Gérer les
                                        droits</a>

                                <li class="menu-has-children"><a href="#">Patients</a>
                                    <ul>
                                        <li class="nav-items">
                                            <a class="nav-link" href="<?= URL ?>patients">Espace
                                                Patients
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                        </li>
                        <!-- <li class="menu-has-children"><a href="#" Ordonnances</a>
                                <ul>
                                    <li class="nav-items"><a class="nav-link" href="<= URL ?>ordonnances">
                                            Mes ordonnances
                                        </a>
                                    </li>
                                </ul>
                        </li> -->


                        </li>
                    </ul>
                    </li>
                    </li>
                    </ul>
                    </li>
                    <?php endif; ?>
                    </li>
                    </ul>
                </nav><!-- #nav-menu-container -->

            </div>
        </div>
    </header>

    <!-- mettre dans uen div juste pour les marges -->
    <div class=" container">
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
                    <div class="nav-items"><a class="nav-link"></a>Nous contacter</div>
                </div>
                <div class="w-100"></div>
                <div class="row col ms-auto ms-auto">
                    <div class="col  px-6 px-ml-auto font-weight-bold dark">Ma galerie</div>
                    <div class="nav-items"><a class="nav-link" href="<?= URL ?>mentions">Mentions légales</a>
                    </div>
                </div>


                <div class="menu-social-icons">
                    <a href="#"><i class="fa fa-facebook float-center mb-4 m-4"></i></a>

                    <a href="#"><i class="fa fa-twitter float-center mb-4 m-4"></i></a>

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
    <script src="<?= URL ?>public/asset/js/profil.js"></script>
    <script src="<?= URL ?>public/asset/js/modificationPassword.js"></script>

</body>

</html>