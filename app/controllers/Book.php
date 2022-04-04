<?php
namespace coding\app\controllers;

use coding\app\models\BookModel;
use coding\app\models\CatigoryModel;
use coding\app\models\Model;

class Book extends Controller{

    function newBook()
    {
     $catigory=  new CatigoryModel();
     $result['cat']=$catigory->selectAll();
     
    

        $this->view('new_Book',$result);
    }

    function showBook()
    {    $category=new Model();
        $result=$category->listAllBook();
        print_r($result);
        $this->view('show_book',$result);

    }

    function store(){
       
        
        $model=new Model();
        $book=[];
        
        $book['title']=$_POST['name'];
        $book['price']=$_POST['price'];
        $book['description']=$_POST['name'];

        $book['publisher_id']=1;
        $book['quantity']=$_POST['quantity'];
        $book['format']=$_POST['format'];
        $book['category_id']=$_POST['catigory_id'];

        $book['pages_number']=$_POST['pages_number'];
        $imageName=$this->uploadFile($_FILES['img']);

        $book['image']=$imageName!=null?$imageName:"default.png";
        $book['created_by']=1;
        $book['is_active']=$_POST['is_active'];

         $model->insert("books",$book);

       
    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }
    




}
?>