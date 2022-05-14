<?php
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once("controllers/PagesStatiquesController.php");
$pagesStatiquesController = new PagesStatiquesController;

require_once("controllers/PatientController.php");
$patientController = new PatientController;






try {
    if (empty($_GET['page'])) {
        require "views/home.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url['0']) {
            case "Home":
                $pagesStatiquesController->afficherHome();
                require "views/home.view.php";
                break;
            case "notre-histoire":
                $pagesStatiquesController->afficherNotreHistoire();
                require "views/notre-histoire.view.php";
                break;
            case "notre-savoir-faire":
                $pagesStatiquesController->afficherNotreSavoirFaire_1();
                require "views/notre-savoir-faire-1.view.php";
                break;
            case "notre-savoir-faire":
                $pagesStatiquesController->afficherNotreSavoirFaire_2();
                require "views/notre-savoir-faire-2.view.php";
                break;
            case "notre-savoir-faire":
                $pagesStatiquesController->afficherNotreSavoirFaire_3();
                require "views/notre-savoir-faire-3.view.php";
                break;
            case "notre-savoir-faire":
                $pagesStatiquesController->afficherNotreSavoirFaire_4();
                require "views/notre-savoir-faire.view-4.php";
                break;
            case "notre-savoir-faire":
                $pagesStatiquesController->afficherNotreSavoirFaire_5();
                require "views/notre-savoir-faire.view-5.php";
                break;
            case "nous-contacter":
                $pagesStatiquesController->afficherContact();
                require "views/nous-contacter.view.php";
                break;
            case "connexion":

                if (empty($url[1])) {
                    $patientController->afficherPatients();
                } elseif ($url[1] === "p") {
                    $patientController->afficherPatients($url[2]);
                } elseif ($url[1] === "a") {
                    $patientController->ajouterPatient();
                } elseif ($url[1] === "m") {
                    $patientController->modifierPatient($url[2]);
                } elseif ($url[1] === "s") {
                    $patientController->suppressionPatient($url[2]);
                } elseif ($url[1] === "av") {
                    $patientController->ajoutPatientValidation();
                } elseif ($url[1] === "mv") {
                    $patientController->modificationPatientValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("la page n'existe pas");
            case "blog":
                require "views/article.view.php";
                break;
            case "galerie":
                require "views/galerie.view.php";
                break;
            case "mentions":
                $pagesStatiquesController->afficherMentions();
                require "views/mentions.view.php";
                break;
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "views/error.view.php";
}