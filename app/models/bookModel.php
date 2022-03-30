<?php
namespace coding\app\models;



class bookModel extends Model{
   

    function __construct()
    {
        parent::$tblName="books";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}