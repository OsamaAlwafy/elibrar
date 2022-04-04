<?php
namespace coding\app\controllers;

use coding\app\models\Model;
use coding\app\models\PaymentModel;

class Payment extends Controller{

    function newPayment()
    {
        $this->view('new_payment');
    }

    function showAuthor()
    {
        $this->view('show_payment');
    }

   

    function store(){
       
        
        $model=new Model();
        $pay=[];
        
        $pay['name']=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['img']);

        $pay['image']=$imageName!=null?$imageName:"default.png";
        $pay['created_by']=1;
        $pay['is_active']=$_POST['is_active'];

         $model->insert("payements",$pay);

       
    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }
       
    

    




}
?>