<?php
require_once __DIR__ . '/../vendor/autoload.php';

use elibrary\app\controllers\SiteController;
use elibrary\app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/register', 'pages/signup');
$app->router->get('/login', 'pages/login');
$app->router->get('/details', 'pages/details');
$app->router->get('/category', 'pages/category');
$app->router->get('/cart', 'pages/cart');
$app->router->get('/stepper', 'pages/stepper');
$app->run();