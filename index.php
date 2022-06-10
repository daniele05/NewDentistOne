<?php
$password = "kiki";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
// var_dump($password);
// var_dump($passwordHash);
// die();
?>

<?php
// Def const URL 
// Const defint lien absolu depuis https ou http
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// role de routeur de index.php

require_once("controllers/AbstractController.php");

require_once "controllers/Visitor/Visitor.controller.php";
$visitor = new VisitorController;

require_once("controllers/PagesStatiquesController.php");
$pagesStatiques = new PagesStatiquesController;

require_once("controllers/PatientController.php");
$patient = new PatientController;

require_once("controllers/VideoController.php");
$video = new VideoController;

require_once("controllers/OrdonnanceController.php");
$ordonnance = new OrdonnanceController;


try {
    if (empty($_GET['page'])) {
        $visitor->home();
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        $page = $url[0];

        switch ($page) {
            case "Home":
                $visitor->home();
                break;
            case "compte":
                switch ($url[1]) {
                    case "profil":
                        $visitor->home();
                        break;
                }
            case "login":

                $visitor->login();
                break;
            case "validation_Login":
                if (!empty($_POST["login"]) && !$_POST["password"]) {
                    // $visitor->validation_Login();
                } else {
                    AbstractController::ajouterMessageAlerte('login ou mot de passe non renseigné', AbstractController::ROUGE);
                }
                $_POST["login"] . "-" . $_POST["password"];

                // $visitor->login();
                break;

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
}