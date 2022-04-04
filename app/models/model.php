<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;


    function insert($table ,$kAndV=array())
    {
        print_r($kAndV);
        $stmt=AppSystem::$appSystem->database->insert($table,$kAndV);
        return $stmt;
    }
   public function listAll($table)
   {  $stmt=AppSystem::$appSystem->database;
    $stmt->return_as('object');

    $result=$stmt->select('categories.id ,categories.name as name_cat,categories.image ,categories.is_active ,categories.created_at ,users.name as name_user')
           ->from('categories')
           ->join('users', 'categories.created_by = users.id', 'INNER')->fetch()->results();
    //   $stmt->getFetchType('array'); 
       
       //$result=$stmt->get_all($table)->results();
       
       return $result ;
   }
   public function listAllBook()
   {
    $stmt=AppSystem::$appSystem->database;
    // $result=$stmt->get_all('books')->results();
       
      
     $stmt->return_as('object');
    $result=$stmt->select('books.id ,books.title as name_book,books.image ,books.is_active ,books.created_at ,description,pages_number 
    ,users.name as name_user ,categories.name as cat_name,publishers.name as pub_name ,authors.name as athu_name')
           ->from('books')
           ->join('users', 'books.created_by = users.id', 'INNER')
           ->join('publishers','publishers.id=books.publisher_id')
           ->join('authors','books.author_id= authors.id')
           ->join('categories','categories.id=books.category_id')
           ->fetch()->results();
  
    return $result ;
}

public function checked($table,$para)
{
    $stmt=AppSystem::$appSystem->database;
    $stmt->return_as('array');
    $result=$stmt->select('*')->from($table)->where('name','=',$para['name'])
    ->and('password','=',$para['password'])->and('role_id','=',1)->fetch()->count();
    return $result;
       
      
    

}

   

    
   
//     function save():bool{
        
      
//         $values=array();
//         $columns=array();
//         //get_object_
//         print_r(get_object_vars($this));
//         foreach(get_object_vars($this) as $key=> $property){
//             //echo $property;
//             if($property!=self::$tblName)
//             {
//                 $values[]=is_string($property)?"'".$property."'":$property;
//                 $columns[]=$key;}

//         }
//         $values=implode(",",$values);
//         $columns=implode(",",$columns);
       

//         return true;
// //        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
// //    //echo $sql_query;
   
// //         $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
// //         if($stmt->execute())
// //         return true;
// //         return false;
//        // return true;
//      //echo $sql_query;
//     }

    // public function getAll(){
    //     $sql_query="select * from ".self::$tblName."";
    //     $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
    //     $stmt->execute();
    //     return $stmt->fetchAll();

    // }
}
?>