<?php

use Hp\Exam1\Controllers\HotelsController;

require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php';

$router = new \Bramus\Router\Router();

$router->mount('/hotels', function() use ($router){
    $router->get('/',   HotelsController::class . '@index');
    $router->get('/{id}/delete', HotelsController::class . '@delete');
    $router->match('GET|POST', '/add', HotelsController::class . '@add' );
    $router->match('GET|POST', '/{id}/update', HotelsController::class . '@update' );

});

$router->run();
