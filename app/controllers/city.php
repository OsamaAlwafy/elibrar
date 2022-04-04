<?php
namespace coding\app\controllers;

use coding\app\models\CityModel;
use coding\app\models\Model;

class City extends Controller{

    function newCity()
    {
        $this->view('new_city');
    }

    function showCity()
    {
        $this->view('show_city');
    }

       
    function store(){
       
        
        $model=new Model();
        $city=[];
        
        $city['name']=$_POST['name'];
      
        $city['created_by']=1;
        $city['is_active']=$_POST['is_active'];

         $model->insert("cities",$city);

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }





}
?>