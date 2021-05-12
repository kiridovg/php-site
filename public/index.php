<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class=" d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <h5 class="h5 my-0 mr-auto fw-normal">NIX</h5>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/about">О нас</a>
    </nav>
    <a class="btn btn-outline-primary" href="/login">Вход</a>
</div>
<div class="container">
    <?php include 'views/login-view.php' ?>
</div>
</body>
</html>
