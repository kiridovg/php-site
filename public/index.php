<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use Framework\Router\Router;

include_once '../vendor/autoload.php';

$goods = json_decode(file_get_contents('../db.txt'), true);

$router = new Router();
$router->link('/list', [App\Controller\Product::class, 'getProductList']);
$router->link('/login/', [App\Controller\Login::class, 'login']);
$router->link('/login/authentication/', [App\Controller\Login::class, 'authorization']);
$router->link('/login/logout/', [App\Controller\Login::class, 'logout']);

$router->link('/', [App\Controller\Product::class, 'index']);
$router->link('/api/', [App\Controller\Product::class, 'getProductListAPI']);
$router->run();

