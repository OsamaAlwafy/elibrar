<?php
namespace coding\app\controllers;

use coding\app\system\AppSystem;
use coding\app\system\Request;
use coding\app\system\Router;

class Controller{

   function view($viewName,$params=[],$type=null){
       AppSystem::$appSystem->router->view($viewName,$params,$type);
   }


 

   public static function uploadFile(array $imageFile): string
   {
       // check images direction
       print_r($imageFile);
       if (!is_dir(__DIR__ . '/../../public/images')) {
           mkdir(__DIR__ . '/../../public/images',0777);
       }
   
       if ($imageFile && $imageFile['tmp_name']) {
           $image = explode('.', $imageFile['name']);
           $imageExtension = end($image);
   
           $imageName = uniqid(). "." . $imageExtension;
           $imagePath =  __DIR__ . '/../../public/images/' . $imageName;
   
           move_uploaded_file($imageFile['tmp_name'], $imagePath);
   
           return $imageName;
       }
   
       return null;
   }
   


}

