<?php
namespace coding\app\controllers;

use coding\app\models\CatigoryModel;
use coding\app\models\Model;

class CatigoryWebsider extends Controller{

    // function newCatigory()
    // {
    //     $this->view('new_Catigory');
    // }
    // function showCatigory()
    // {    $category=new Model();
    //     $result=$category->listAll("categories");
    //     print_r($result);
    //     $this->view('show_catigory',$result);

    // }

    public function catigory($params=[])
    {
        
        $model=new CatigoryModel();
        $result=$model->getBookByCatigory($params['id']);
        var_dump($result);
        
        $this->view('category',$result);
    } 

    // function listAll(){
    //     $categories=new CatigoryModel();
    //     $allCategories=$categories->getAll();
    //     //print_r($allCategories);

    //     $this->view('list_categories',$allCategories);

    // }
    // function create(){
    //     $this->view('add_category');

    // }

    
       
    




}
?>