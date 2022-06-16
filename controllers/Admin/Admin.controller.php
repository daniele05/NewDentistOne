<?php
require_once("controllers/AbstractController.php");
require_once("models/Admin/Admin.model.php");

class AdminController extends AbstractController
{
    private $adminManager;

    public function __construct()
    // instanciation du adminManager
    {
        $this->adminManager = new AdminManager;
    }

    public function droits()
    {
        echo "droits";
    }
    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}