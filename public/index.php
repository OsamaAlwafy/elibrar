<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\Catigory;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

Router::get('/users',[UsersController::class,'show']);


Router::get('/books',function(){
  echo "books route path";
});



Router::post('/save_catigory',[Catigory::class,'saveCatigory']);
Router::get('/new_catigory',[Catigory::class,'newCatigory']);


$system->start();

