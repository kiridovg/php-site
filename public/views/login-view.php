<?php
if ($auth->isAuth()) {
    echo "Добро пожаловать, " . $auth->getLogin();
    echo "<br/><br/>
<a href='../../Framework/Authentication/logout.php?is_exit=1'>
    <button class='w-100 btn btn-lg btn-primary' type='submit'>Выход</button>
            </a>";
} else {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Логин</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="row text-center mt-3 mb-3">
        <div class="col-md-8 offset-md-2">
            <div class="form-sign mt-3">

                <form method="post" action="../../Framework/Authentication/login.php">
                    <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
                    <label for="inputLogin" class="visually-hidden">Login</label>
                    <input type="login" name="login" id="login" class="form-control" placeholder="Login" required=""
                           autofocus="">
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Пароль"
                           required="">
                    <?php
                    if (isset($_SESSION["is_auth"])) {
                        if ($_SESSION["is_auth"] == false) {
                            echo "Не правильный пароль или логин";
                            unset($_SESSION["is_auth"]);
                    }
                    }
                    ?>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
                    <p class="mt-5 mb-3 text-muted">©2021</p>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}