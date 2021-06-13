<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

include_once '../autoloader.php';
$autoloader = new Autoloader();
$autoloader->load('..\\Framework\\Render\\RenderInterface');
$autoloader->load('..\\Framework\\Render\\Render');

$goods = json_decode(file_get_contents('../db.txt'), true);
$templates = 'views/productlist';
$layout = 'views/layout';
$params = [
    "id" => "123 ",
    "name" => "Kirill",
    "title" => "Список товаров",
    "goods" => $goods,
];

$render = New Render();
echo $render->render($templates, $params,  $layout);