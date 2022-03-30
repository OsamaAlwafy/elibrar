<?php
namespace coding\app\models;



class adminModel extends Model{
   

    function __construct()
    {
        parent::$tblName="users";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}