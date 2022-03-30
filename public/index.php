<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\Catigory;
use coding\app\controllers\Book;
use coding\app\controllers\Author;
use coding\app\controllers\Offer;
use coding\app\controllers\Publisher;

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



Router::get('/new_author',[Author::class,'newAuthor']);
Router::get('/save_author',[Author::class,'newAuthor']);
Router::get('/new_offer',[Offer::class,'newOffer']);
Router::get('/save_offer',[Offer::class,'newOffer']);


Router::post('/save_catigory',[Catigory::class,'saveCatigory']);
Router::get('/new_catigory',[Catigory::class,'newCatigory']);
Router::get('/new_book',[Book::class,'newBook']);
Router::get('/save_book',[Book::class,'newBook']);
Router::get('/new_publisher',[Publisher::class,'newPublisher']);
Router::get('/save_publisher',[Publisher::class,'savePublisher']);


$system->start();

