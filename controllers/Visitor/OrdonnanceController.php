<?php
require_once "models/Visitor/OrdonnanceManager.class.php";

class OrdonnanceController
{
    private $ordonnanceManager;
    public function __construct()
    {
        $this->ordonnanceManager = new OrdonnanceManager();
        $this->ordonnanceManager->chargementOrdonnances();
    }

    //Afficher tout le tableau 
    public function afficherOrdonnances()
    {
        $ordonnanceManager = $this->ordonnanceManager;
        $ordonnances = $ordonnanceManager->getOrdonnances();
        require "views/Visitor/ordonnances.view.php";
    }
}