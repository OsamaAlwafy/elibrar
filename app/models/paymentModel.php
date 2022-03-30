<?php
namespace coding\app\models;



class PaymentModel extends Model{
   

    function __construct()
    {
        parent::$tblName="payments";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}