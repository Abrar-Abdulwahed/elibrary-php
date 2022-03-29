<?php
require_once __DIR__ . '/../vendor/autoload.php';

use elibrary\app\controllers\SiteController;
use elibrary\app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/register', 'signup');
// $app->router->get('/register', [SiteController::class, 'register']);
// $app->router->post('/register', [SiteController::class, 'register']);
// $app->router->get('/login', [SiteController::class, 'login']);
// $app->router->get('/login/{id}', [SiteController::class, 'login']);
// $app->router->post('/login', [SiteController::class, 'login']);
// $app->router->get('/logout', [SiteController::class, 'logout']);
// $app->router->get('/contact', [SiteController::class, 'contact']);
// $app->router->get('/about', [AboutController::class, 'index']);
// $app->router->get('/profile', [SiteController::class, 'profile']);
// $app->router->get('/profile/{id:\d+}/{username}', [SiteController::class, 'login']);
$app->run();