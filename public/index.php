<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use App\Core\View;

include_once '../vendor/autoload.php';

$goods = json_decode(file_get_contents('../db.txt'), true);
$templates = '../App/View/Templates/productlist.php';
$layout = 'layout.php';
$params = [
    "id" => "123 ",
    "name" => "Kirill",
    "title" => "Список товаров",
    "goods" => $goods,
];

$render = New View();
$render->render($templates, $params,  $layout);