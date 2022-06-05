<?php
require "models/UserManager.php";

class UserController extends UserManager
{
    public function loginView()
    {
        require "views/User/login.view.php";
    }
   
}


if(isset($_GET['action']) && $_GET['action'] =='login'){
    $userController = new UserController;
    $userController->loginView();
}