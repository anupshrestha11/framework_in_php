<?php

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

$app = new Application(dirname(__DIR__), $config);


$app->router->get('/', [HomeController::class, 'home']);


$app->router->get('/contact', [HomeController::class, 'contact']);
$app->router->post('/contact', [HomeController::class, 'handleContact']);


$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'Register']);

$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);


$app->run();
