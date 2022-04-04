<?php
namespace coding\app\controllers;

use coding\app\models\CatigoryModel;
use coding\app\models\Model;

class Catigory extends Controller{

    function newCatigory()
    {
        $this->view('new_Catigory');
    }
    function showCatigory()
    {    $category=new Model();
        $result=$category->listAll("categories");
        print_r($result);
        $this->view('show_catigory',$result);

    }

    public function catigory()
    {
        $this->view('category');
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

    function store(){
        print_r($_POST);
        
        $category=new Model();
        $cat=[];
        
        $cat['name']=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['img']);

        $cat['image']=$imageName!=null?$imageName:"default.png";
        $cat['created_by']=5;
        $cat['is_active']=$_POST['is_active'];

         $category->insert("categories",$cat);

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }

       
    




}
?>