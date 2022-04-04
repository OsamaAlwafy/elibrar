<?php
namespace coding\app\controllers;

use coding\app\models\AdminModel;
use coding\app\models\Model;

class Admin extends Controller{

    function newAdmin()
    {
        $this->view('new_admin');
    }
    function store(){
       
        
        $model=new Model();
        $admin=[];
        
        $admin['name']=$_POST['name'];
        $admin['email']=$_POST['email'];
        $admin['password']=$_POST['pass'];
      
        $admin['role_id']=1;
       
       
        $admin['is_active']=$_POST['is_active'];
       

         $model->insert("users",$admin);

    }
    function edit(){
        

    }
    public function login()
    {
        $this->view('login');
    }

    function check_login()
    {
        $model=new Model();
        $admin=[];
        $admin['name']=$_POST['name'];
        $admin['password']=$_POST['password'];
        $admin['role_id']=1;
        $result=$model->checked('users',$admin);
        if($result>0)
        {
          $this->newAdmin();
        }
        

        
    }
    function update(){

    }
    public function remove(){

    }
   public function listAll()
   {

   }
       
    
       
    




}
?>