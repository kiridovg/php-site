<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use Framework\Router\Router;

include_once '../vendor/autoload.php';

$goods = json_decode(file_get_contents('../db.txt'), true);

$router = New Router();

$router->get('/', [App\Controller\Product::class, 'getProductList']);
$router->run();