<?php
namespace coding\app\controllers;

use coding\app\models\Model;
use coding\app\models\PublisherModel;

class Publisher extends Controller{

    function newPublisher()
    {
        $this->view('new_Publisher');
    }

    function store(){
       
        
        $model=new Model();
        $pub=[];
        
        $pub['name']=$_POST['name'];
        $pub['alt_phone']=$_POST['alt_phone'];
        $pub['phone']=$_POST['phone'];

        $pub['country']=$_POST['country'];
       
      
        $pub['fax']=$_POST['fax'];
        $pub['email']=$_POST['email'];
       

        $pub['address']=$_POST['address'];
        $imageName=$this->uploadFile($_FILES['img']);

        $pub['image']=$imageName!=null?$imageName:"default.png";
        $pub['created_by']=1;
        $pub['is_active']=$_POST['is_active'];

         $model->insert("publishers",$pub);

       
    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }
    

    




}
?>