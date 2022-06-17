<!-- <php
echo password_hash("test", PASSWORD_DEFAULT);
?> -->

<?php
// phpinfo();
// Def const URL 
// Const defint lien absolu depuis https ou http
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// role de routeur de index.php

require_once("controllers/AbstractController.php");
require_once "controllers/Toolbox.class.php";
require_once "controllers/Securite.class.php";
require_once "controllers/Visitor/Visitor.controller.php";
require_once "controllers/User/User.controller.php";
require_once("controllers/PagesStatiquesController.php");
require_once("controllers/PatientController.php");
require_once("controllers/VideoController.php");
require_once("controllers/OrdonnanceController.php");
require_once("controllers/Administrateur/Administrateur.controller.php");
$administrateur = new AdministrateurController;
$user = new UserController;
$visitor = new VisitorController;
$patient = new PatientController;
$ordonnance = new OrdonnanceController;
$video = new VideoController;
$pagesStatiques = new PagesStatiquesController;
try {
    if (empty($_GET['page'])) {
        $visitor->home();
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        $page = $url[0];

        switch ($page) {
            case "home":
                $visitor->home();
                break;
            case "login":
                $visitor->login();
                break;
            case "validation_login":

                if (!empty($_POST["login"]) && !empty($_POST["password"])) {
                    $login = Securite::secureHTML($_POST["login"]);
                    // var_dump($login);
                    // die();
                    $password = Securite::secureHTML($_POST["password"]);
                    $user->validation_login($login, $password);
                } else {
                    Toolbox::ajouterMessageAlerte('login ou mot de passe non renseigné', Toolbox::ROUGE);

                    // reroutage si pas de connexion 
                    header('Location:' . URL . "login");
                    // echo "test";
                }
                break;
            case "creerCompte":
                $visitor->creerCompte();
            case "validation_creerCompte":
                if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["mail"])) {
                    $login = Securite::secureHTML($_POST["login"]);
                    $password = Securite::secureHTML($_POST["password"]);
                    $mail = Securite::secureHTML($_POST["mail"]);
                    $user->validation_creerCompte($login, $password, $mail);
                } else {
                    Toolbox::ajouterMessageAlerte('Les trois champs sont obligatoires', Toolbox::ROUGE);
                    header("Location:" . URL . "creerCompte");
                }
                break;
                // else{
                //     Toolbox::ajouterMessageAlerte('Login non disponible',Toolbox::ROUGE);
                // }

            case "compte":
                // Securite en plus avec la fonction estConnecte
                if (!Securite::estConnecte()) {
                    Toolbox::ajouterMessageAlerte("Veuillez vous connecter !", Toolbox::ROUGE);
                    header("Location:" . URL . "login");
                } else {
                    switch ($url[1]) {
                        case "profil":
                            $user->profil();
                            break;
                        case "deconnexion":
                            $user->deconnexion();
                            // var_dump("test");

                        default:
                            throw new Exception("la page n'existe pas");
                    }
                }
                break;
            case "administrateur":
                if (!Securite::estConnecte()) {
                    Toolbox::ajouterMessageAlerte("Vous devez vous connecter", Toolbox::ROUGE);
                    header("Location:" . URL . $login);
                } else if (!Securite::estAdministrateur()) {
                    Toolbox::ajouterMessageAlerte("Vous ne pouvez pas vous connecter ici", Toolbox::ROUGE);
                    header("Location:" . URL . $home);
                } else {
                    switch ($url[1]) {
                        case 'droits':
                            $administrateur->droits();
                            break;

                        default:
                            throw new Exception("la page n'existe pas");
                    }
                }
                break;

            default:
                throw new Exception("la page n'existe pas");

            case "notre-histoire":
                $pagesStatiques->afficherNotreHistoire();
                break;
            case "notre-equipe":
                $pagesStatiques->afficherNotreEquipe();
                break;
            case "leCabinetEnPhotos":
                $pagesStatiques->afficherleCabinetEnPhotos();
                break;

            case "notre-savoir-faire-1":
                $pagesStatiques->afficherNotreSavoirFaire_1();
                break;
            case "notre-savoir-faire-2":
                $pagesStatiques->afficherNotreSavoirFaire_2();
                break;
            case "notre-savoir-faire-3":
                $pagesStatiques->afficherNotreSavoirFaire_3();
                break;
            case "notre-savoir-faire-4":
                $pagesStatiques->afficherNotreSavoirFaire_4();
                break;
            case "notre-savoir-faire-5":
                $pagesStatiques->afficherNotreSavoirFaire_5();
                break;
            case "nous-contacter":
                $pagesStatiques->afficherContact();
                break;
            case "mentions":
                $pagesStatiques->afficherMentions();
                break;

            case "patients":
                if (empty($url[1])) {
                    $patient->afficherPatients();
                } elseif ($url[1] === "p") {
                    $patient->afficherPatient($url[2]);
                } elseif ($url[1] === "a") {
                    $patient->ajouterPatient();
                } elseif ($url[1] === "m") {
                    $patient->modifierPatient($url[2]);
                } elseif ($url[1] === "s") {
                    $patient->suppressionPatient($url[2]);
                } elseif ($url[1] === "av") {
                    $patient->ajoutPatientValidation();
                } elseif ($url[1] === "mv") {
                    $patient->modificationPatientValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;

            case "ordonnances":
                if (empty($url[1])) {
                    $ordonnance->afficherOrdonnances();
                } elseif ($url[1] === "a") {
                    $ordonnance->ajouterOrdonnance();
                } elseif ($url[1] === "m") {
                    $ordonnance->modifierOrdonnance($url[2]);
                } elseif ($url[1] === "d") {
                    $ordonnance->suppressionOrdonnance($url[2]);
                } elseif ($url[1] === "av") {
                    $ordonnance->ajoutOrdonnanceValidation();
                } elseif ($url[1] === "mv") {
                    $ordonnance->modificationOrdonnanceValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;

            case "galerie":
                require "views/galerie.view.php";
                break;
            case "videos":
                if (empty($url[1])) {
                    $video->afficherVideos();
                } elseif ($url[1] === "a") {
                    $video->ajouterVideo();
                } elseif ($url[1] === "m") {
                    $video->modifierVideo($url[2]);
                } elseif ($url[1] === "d") {
                    $video->suppressionVideo($url[2]);
                } elseif ($url[1] === "av") {
                    $video->ajoutVideoValidation();
                } elseif ($url[1] === "mv") {
                    $video->modificationVideoValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;


            default:
                throw new Exception("la page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "views/error.view.php";
};