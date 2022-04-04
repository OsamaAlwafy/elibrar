<?php
namespace coding\app\controllers;

use coding\app\models\CatigoryModel;
use coding\app\models\HomeModel;
use coding\app\models\Model;

class Home extends Controller{

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

    public function home()
    {
        

        $model =new HomeModel();
        $result=[];  
        $result['nameCat']=$model->selectAllCatigory();

        $result['cat']=$model->selectCatigory();
        $result['offer']=$model->selectBookOffer();

        foreach( $result['nameCat'] as $nameCat)
        {
          
        $result[$nameCat['name']]=$model->selectBook($nameCat['name']);
        // $result['his']=$model->selectBook('history');
        // $result['ro']=$model->selectBook('ro');

        }
      
       $this->view('home',$result,'catigory');
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