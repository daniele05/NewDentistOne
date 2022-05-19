<?php
// Def const URL 
// Const defint lien absolu depuis https ou http
session_start();
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// role de routeur de index.php

require_once("controllers/PagesStatiquesController.php");
$pagesStatiquesController = new PagesStatiquesController;

require_once("controllers/PatientController.php");
$patientController = new PatientController;

require_once("controllers/ArticleController.php");
$articleController = new ArticleController;

require_once("controllers/UserController.php");
$userController = new UserController;






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
            case "notre-savoir-faire-1":
                $pagesStatiquesController->afficherNotreSavoirFaire_1();
                require "views/notre-savoir-faire-1.view.php";
                break;
            case "notre-savoir-faire-2":
                $pagesStatiquesController->afficherNotreSavoirFaire_2();
                require "views/notre-savoir-faire-2.php";
                break;
            case "notre-savoir-faire-3":
                $pagesStatiquesController->afficherNotreSavoirFaire_3();
                require "views/notre-savoir-faire-3.view.php";
                break;
            case "notre-savoir-faire-4":
                $pagesStatiquesController->afficherNotreSavoirFaire_4();
                require "views/notre-savoir-faire-4.php";
                break;
            case "notre-savoir-faire-5":
                $pagesStatiquesController->afficherNotreSavoirFaire_5();
                require "views/notre-savoir-faire-5.view.php";
                break;
            case "nous-contacter":
                $pagesStatiquesController->afficherContact();
                require "views/nous-contacter.view.php";
                break;

            case "login":
                $userController->login();
                break;

            case "patients":
                if (empty($url[1])) {
                    $patientController->afficherPatients();
                } elseif ($url[1] === "p") {
                    $patientController->afficherPatient($url[2]);
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

            case "blog":
                if (empty($url[1])) {
                    $articleController->afficherArticle();
                } elseif ($url[1] === "a") {
                    $articleController->ajouterArticle();
                } elseif ($url[1] === "m") {
                    $articleController->modifierArticle($url[2]);
                } elseif ($url[1] === "d") {
                    $articleController->suppressionArticle($url[2]);
                } elseif ($url[1] === "av") {
                    $articleController->ajoutArticleValidation();
                } elseif ($url[1] === "mv") {
                    $articleController->modificationArticleValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;

            case "galerie":
                require "views/galerie.view.php";
                break;
            case "mentions":
                $pagesStatiquesController->afficherMentions();
                require "views/mentions.view.php";
                break;
            default:
                throw new Exception("la page n'existe pas");
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "views/error.view.php";
}