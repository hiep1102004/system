<?php

use Hp\Tt\Controllers\TeacherController;

session_start();

require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php.';

$router = new \Bramus\Router\Router();

$router->mount('/teacher', function() use ($router){
    $router->get('/',TeacherController::class . '@index');
    $router->get('/{id}/delete',TeacherController::class . '@delete');
    $router->match('GET|POST', '/add',TeacherController::class . '@add' );
    $router->match('GET|POST', '/{id}/update',TeacherController::class . '@update' );
});

$router->run();