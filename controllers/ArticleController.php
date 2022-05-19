<?php
require_once "models/ArticleManager.class.php";

class ArticleController
{
    private $articleManager;

    public function __construct()
    {
        $this->articleManager = new Article;
    }

    // Afficher tout le tableau article
    public function afficherArticle()
    {
        $articleManager = $this->articleManager;
        $articleManager->chargementArticles();
        $articles = $articleManager->getArticles();

        require "views/article.view.php";
    }

    public function ajouterArticle()
    {
        require "views/ajouterArticle.view.php";
    }


    // Valiadtaion ajout patient avec tous les champs 
    public function ajoutArticleValidation()
    {
        $file = $_FILES['image'];

        $repertoire = "public/asset/img/";
        $nomPhotoAjoute = $this->ajoutPhoto($file, $repertoire);
        $this->articleManager->ajouterArticleBd($nomPhotoAjoute, $_POST['idArticle'], $_POST['created'], $_POST['titre'], $_POST['image'], $_POST['contenu'], $_POST['idDentiste']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Ajout réalisé"
        ];

        header('Location:' . URL . "article");
    }
    //  Modif article 
    public function modifierArticle($idArticle)
    {

        $article = $this->articleManager->getArticleById($idArticle);


        require "views/modifierArticle.view.php";
    }

    // modif article validation
    public function modificationArticleValidation()
    {
        $photoActuelle = $this->articleManager->getArticleById($_POST['identifiantArticle'])->getImage();
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            unlink("public/asset/image/" . $photoActuelle);
            $repertoire = "public/asset/img/";
            $nomPhotoAjoute = $this->ajoutPhoto($file, $repertoire);
        } else {
            $nomPhotoAjoute =  $photoActuelle;
        }
        $this->articleManager->modificationArticleBD($nomPhotoAjoute,  $_POST['idArticle'], $_POST['created'], $_POST['titre'], $_POST['image'], $_POST['contenu'], $_POST['idDentiste']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Modification réalisée"
        ];

        header('Location:' . URL . "article");
    }

    // Supprimer un patient 

    public function suppressionArticle($idArticle)
    {
        $nomPhoto = $this->articleManager->getArticleById($idArticle)->getPhoto();
        unlink("public/asset/image/" . $nomPhoto);

        // -> action de suppression dans la bdd 

        $this->articleManager->suppressionArticleBD($idArticle);


        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Suppression réalisée"
        ];
    }


    // Critères d ajout de photo 

    private function ajoutPhoto($file, $dir)
    {
        if (isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une photo");

        if (!file_exists($dir)) mkdir($dir, 0777);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getPhotoSize($file["tmp_name"]))
            throw new Exception("le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif");
        throw new Exception("l'extension du fichier n'est pas reconnue");


        if (file_exists($target_file))
            throw new Exception("le fichier existe déjà ");

        if ($file['size'] > 500000)
            throw new Exception("le fichier trop gros ");

        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de la photo n'a pas fonctionné ");
        else return ($random . "_" . $file['name']);
    }
}