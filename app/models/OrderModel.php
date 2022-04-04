<?php
namespace coding\app\models;



class OrderModel extends Model{
   

    function __construct()
    {
        parent::$tblName="orders";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}