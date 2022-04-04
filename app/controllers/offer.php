<?php
namespace coding\app\controllers;

use coding\app\models\Model;
use coding\app\models\OfferModel;

class Offer extends Controller{

    function newOffer()
    {
        $this->view('new_offer');
    }
    function store(){
       
        
        $model=new Model();
        $offer=[];
        
        $offer['title']=$_POST['title'];
        $offer['discount']=$_POST['discount'];
        $offer['start_date']=$_POST['start_date'];
        $offer['end_date']=$_POST['end_date'];
        $offer['category_ids']=2;
        $offer['book_ids']=2;
        $offer['created_by']=1;
        $offer['is_active']=$_POST['is_active'];
        $offer['all_books']=$_POST['all_books'];

         $model->insert("offers",$offer);

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }
       
    




}
?>