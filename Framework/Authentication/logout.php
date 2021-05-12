<?php

require_once  'login.php';

if (isset($_GET["is_exit"])) {
    if ($_GET["is_exit"] == 1) {
        $auth->logOut();
        header("Location: ?is_exit=0");
    }
}

