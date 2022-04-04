<?php
namespace coding\app\models;

use coding\app\system\AppSystem;

class CatigoryModel extends Model{
   


public function selectAll()
{
    $stmt=AppSystem::$appSystem->database;
    $stmt->return_as('object');
    $result=$stmt->select('*')->from('categories')->fetch()->results();
    return $result;
}
public function getBookByCatigory($id)
{
    $stmt=AppSystem::$appSystem->database;
    $stmt->return_as('object');
    $result=$stmt->select('*')->from('books')->where('category_id','=',$id)->fetch()->results();
    return $result;    

}


    // function __construct()
    // {
    //     parent::$tblName="categories";
        
    // }

    // function __set($name, $value)
    // {
    //     $this->$name=$value;
        
    // }


}