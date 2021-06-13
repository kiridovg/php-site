<?php

require_once 'authentication.php';
require_once '../Session/session.php';

$session = new Session();
$session->start();


$auth = new Authentication($session);

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $auth->auth($_POST["login"], $_POST["password"]);
}

require_once '../../public/views/login-view.php';
