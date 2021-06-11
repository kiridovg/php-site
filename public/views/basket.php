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

<div class=" d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <h5 class="h5 my-0 mr-auto fw-normal"><a class="p-2 text-dark" href="home.php">NIX</a></h5>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="about.php">О нас</a>
    </nav>
    <a class="btn btn-outline-primary" href="login.php">Вход</a>
</div>
<div class="row text-center mt-3 mb-3">
    <div class="col-md-8 offset-md-2">
        <div class="form-sign mt-3">

            <form method="post" action="/login/check">
                <h1 class="h3 mb-3 fw-normal">Товары в корзине</h1>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Мобильный телефон Xiaomi Mi 11 Lite 6/64GB Boba Black</td>
                        <td>7 999₴</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Телевизор Samsung QE50Q60TAUXUA</td>
                        <td>19 999₴</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ноутбук HP Laptop 15s-eq1003ua (1U9R9EA) Natural Silver</td>
                        <td>16 999₴</td>
                    </tr>
                    </tbody>
                </table>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Купить</button>
                <p class="mt-5 mb-3 text-muted">©2021</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
