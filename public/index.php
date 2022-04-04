<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\Admin;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\Catigory;
use coding\app\controllers\Book;
use coding\app\controllers\Author;
use coding\app\controllers\CatigoryWebsider;
use coding\app\controllers\CheckoutWebsider;
use coding\app\controllers\DetailsWebsider;
use coding\app\controllers\City;
use coding\app\controllers\Home;

use coding\app\controllers\Offer;
use coding\app\controllers\Order;
use coding\app\controllers\Payment;
use coding\app\controllers\Publisher;
use coding\app\controllers\UserController;
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
Router::get('/user_profile',[UserController::class,'showProfile']);



Router::get('/new_author',[Author::class,'newAuthor']);
Router::get('/show_author',[Author::class,'showAuthor']);
Router::post('/save_author',[Author::class,'store']);

Router::get('/new_offer',[Offer::class,'newOffer']);
Router::post('/save_offer',[Offer::class,'store']);



Router::post('/save_catigory',[Catigory::class,'store']);
Router::get('/new_catigory',[Catigory::class,'newCatigory']);
Router::get('/category/{id}',[CatigoryWebsider::class,'catigory']);

Router::get('/checkout',[CheckoutWebsider::class,'checkout']);
Router::get('/details',[DetailsWebsider::class,'details']);
Router::get('/home',[Home::class,'home']);

Router::get('/show_catigory',[Catigory ::class,'showCatigory']);

Router::get('/new_book',[Book::class,'newBook']);
Router::post('/save_book',[Book::class,'store']);
Router::get('/show_book',[Book::class,'showBook']);

Router::get('/new_publisher',[Publisher::class,'newPublisher']);
Router::post('/save_publisher',[Publisher::class,'store']);

Router::get('/admin',[Admin::class,'login']);
Router::post('/input_login',[Admin::class,'check_login']);
Router::get('/new_admin',[Admin::class,'newAdmin']);
Router::post('/save_admin',[Admin::class,'store']);


Router::get('/new_payment',[ Payment::class,'newPayment']);
Router::post('/save_payment',[ Payment::class,'store']);

Router::get('/new_city',[ City::class,'newCity']);
Router::get('/show_city',[ City::class,'showCity']);
Router::post('/save_city',[ City::class,'store']);
Router::get('/show_order',[Order ::class,'showOrder']);


/*  user interface websit  */





$system->start();

