<?php

class PagesStatiquesController
{

    public function afficherHome()
    {
        require "views/home.view.php";
    }

    public function afficherNotreHistoire()
    {
        require "views/notre-histoire.view.php";
    }

    public function afficherNotreEquipe()
    {
        require "views/notre-equipe.view.php";
    }
    public function afficherleCabinetEnPhotos()
    {
        require "views/leCabinetEnPhotos.view.php";
    }

    public function afficherNotreSavoirFaire_1()
    {
        require "views/notre-savoir-faire-1.view.php";
    }

    public function afficherNotreSavoirFaire_2()
    {
        require "views/notre-savoir-faire-2.php";
    }

    public function afficherNotreSavoirFaire_3()
    {
        require "views/notre-savoir-faire-3.view.php";
    }

    public function afficherNotreSavoirFaire_4()
    {
        require "views/notre-savoir-faire-4.php";
    }

    public function afficherNotreSavoirFaire_5()
    {
        require "views/notre-savoir-faire-5.view.php";
    }

    public function afficherContact()
    {
        require "views/nous-contacter.view.php";
    }

    public function afficherMentions()
    {
        require "views/mentions.view.php";
    }
}