<?php
require_once __DIR__ . '/../vendor/autoload.php';

use elibrary\app\controllers\SiteCtrl;
use elibrary\app\controllers\UserCtrl;
use elibrary\app\controllers\AuthorCtrl;
use elibrary\app\controllers\PublisherCtrl;
use elibrary\app\controllers\CategoryCtrl;
use elibrary\app\controllers\BookCtrl;
use elibrary\app\core\Application;
use elibrary\app\core\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
    'servername'=>$_ENV['DB_SERVER_NAME'],
    'dbname'=>$_ENV['DB_NAME'],
    'dbpass'=>$_ENV['DB_PASSWORD'],
    'username'=>$_ENV['DB_USERNAME']
  
);
$app = new Application($config);

Router::get('/', [SiteCtrl::class, 'home']);
Router::get('/details', [SiteCtrl::class, 'home']);
Router::get('/category', [SiteCtrl::class, 'category']);
Router::get('/cart', [SiteCtrl::class, 'cart']);
Router::get('/stepper', 'pages/stepper');


Router::get('/register', [UserCtrl::class, 'register']);
Router::get('/login', [UserCtrl::class, 'login']);
Router::post('/register', [UserCtrl::class, 'register']);
Router::post('/login', [UserCtrl::class, 'login']);

Router::get('/admin', 'admin/home');
// Router::get('/admin/add_category', 'dashboard/home');
// Router::get('/admin/categories', 'dashboard/home');

/* ====================== Author Routes ====================== */
Router::get('/authors',[AuthorCtrl::class,'listAll']);
Router::get('/add_author',[AuthorCtrl::class,'create']);
Router::post('/add_author',[AuthorCtrl::class,'create']);
Router::get('/update_author/{id}',[AuthorCtrl::class,'update']);
Router::post('/update_author',[AuthorCtrl::class,'update']);
Router::post('/delete_or_recovery_author/{id}',[AuthorCtrl::class,'delete_or_recovery']);

/* ====================== Publisher Routes ====================== */
Router::get('/publishers',[PublisherCtrl::class,'listAll']);
Router::get('/add_publisher',[PublisherCtrl::class,'create']);
Router::post('/add_publisher',[PublisherCtrl::class,'create']);
Router::get('/update_publisher/{id}',[PublisherCtrl::class,'update']);
Router::post('/update_publisher',[PublisherCtrl::class,'update']);
Router::post('/delete_or_recovery_publisher/{id}',[PublisherCtrl::class,'delete_or_recovery']);

/* ====================== Category Routes ====================== */
Router::get('/categories',[CategoryCtrl::class,'listAll']);
Router::get('/add_category',[CategoryCtrl::class,'create']);
Router::post('/add_category',[CategoryCtrl::class,'create']);
Router::get('/update_category/{id}',[CategoryCtrl::class,'update']);
Router::post('/update_category',[CategoryCtrl::class,'update']);
Router::post('/delete_or_recovery_category/{id}',[CategoryCtrl::class,'delete_or_recovery']);

/* ====================== Book Routes ====================== */
Router::get('/books',[BookCtrl::class,'listAll']);
Router::get('/add_book',[BookCtrl::class,'create']);
Router::post('/add_book',[BookCtrl::class,'create']);
Router::get('/update_book/{id}',[BookCtrl::class,'update']);
Router::post('/update_book',[BookCtrl::class,'update']);
Router::post('/delete_or_recovery_book/{id}',[BookCtrl::class,'delete_or_recovery']);

/** offer routes  */
$app->start();