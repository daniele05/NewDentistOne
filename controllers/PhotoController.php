<?php

// require_once('Photo.class.php');
// require_once('PhotoManager.class.php');

// class PhotoController
// {

//     private $photoManager;

//     public function __construct()
//     {
//         $this->photoManager = new PhotoManager();
//         $this->photoManager->chargementPhotos();
//     }
//     // Afficher tout le tableau photo
//     public function afficherPhotos()
//     {
//         $photoManager = $this->photoManager;
//         $photos = $photoManager->getPhotos();
//         require('views/photo.view.php');
//     }
//     // Afficher une photo

//     // public function afficherPhoto($idPhoto)
//     public function afficherPhoto($idPhoto)
//     {
//         $photo = $this->photoManager->getPhotoById($idPhoto);
//         require('views/afficherPhoto.view.php');
//     }
// }