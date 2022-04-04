<?php
namespace coding\app\controllers;

use coding\app\models\CatigoryModel;
use coding\app\models\Model;

class Author extends Controller{

    function newAuthor()
    {
        $this->view('new_Author');
    }
    function showAuthor()
    {
        $this->view('show_author');
    }
   

    function store(){
       
        
        $model=new Model();
        $author=[];
        
        $author['name']=$_POST['name'];
        $author['phone']=$_POST['phone'];
        $author['email']=$_POST['email'];
        $author['bio']=$_POST['desc'];
        $author['created_by']=1;
        $author['is_active']=$_POST['is_active'];

         $model->insert("authors",$author);

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }
       
    




}
?>