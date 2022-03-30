<?php
namespace coding\app\models;



class CityModel extends Model{
   

    function __construct()
    {
        parent::$tblName="cities";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}