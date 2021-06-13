<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$templates = 'views/home.php';
$layout = 'views/layout.php';
$params = [
    "templates" => "views/home.php",
    "id" => "123 ",
    "name" => "Kirill",
];


function render($templates, $params, $layout)
{
    if (is_file($templates) && is_file($layout)) {
        ob_start();
        extract($params);
        include $templates;
        return ob_get_clean();
    }
    return false;
}

echo render($templates, $params,  $layout);