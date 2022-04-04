<?php
namespace coding\app\models;

use coding\app\system\AppSystem;

class HomeModel extends Model{
   

    function __construct()
    {
        parent::$tblName="books";
        
    }

    // function __set($name, $value)
    // {
    //     $this->$name=$value;
        
    // }

    public function selectCatigory()
    {
        $stmt=AppSystem::$appSystem->database;
        $stmt->return_as('object');

        $result=$stmt->select('*')->from('categories')->fetch()->results();
        return $result;

    }
    public function selectAllCatigory()
    {
        $stmt=AppSystem::$appSystem->database;
        $stmt->return_as('array');

        $result=$stmt->select('name')->from('categories')->fetch()->results();
        return $result;


    }

    public function selectBook($type)
    {

     

//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//gfg is the database name
$dbname = "elib";

// Create connection by passing these connection parameters
$conn = new \mysqli($servername, $username, $password, $dbname);


//sql query
$sql = "SELECT * FROM `books` WHERE `category_id` IN (SELECT `id` from `categories` where `name` ='$type')";
$result = $conn->query($sql);


$res=[];
while($row = mysqli_fetch_array($result)){
$res[]=$row;
} 

//display data on web page

//close the connection

$conn->close();
return $res;



        // $stmt=AppSystem::$appSystem->database;
        // $stmt->return_as('object');
        // $result=$stmt->select('*')->from('books')->in('category_id',select('id')->from('categories')->where('name','=','din'))->fetch()->results();
        // return $result;

  

    }
    public function selectBookOffer(){

        $stmt=AppSystem::$appSystem->database;
        $stmt->return_as('object');

       
        $result=$stmt->select('books.id ,books.title as name_book,books.image  ,books.price, books.format,
        offers.start_date,offers.end_date')
               ->from('books')
               ->join('offers', 'offers.book_ids = books.id', 'INNER')
              
               ->fetch()->results();

return $result;
    }

}