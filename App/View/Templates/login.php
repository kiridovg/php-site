<div class="row text-center mt-3 mb-3">
    <div class="col-md-8 offset-md-2">
        <div class="form-sign mt-3">
            <form method="post" action="/login/authentication">
                <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
                <label for="inputLogin" class="visually-hidden">Login</label>
                <input type="login" name="login" id="login" class="form-control" placeholder="Login" required=""
                       autofocus="">
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Пароль"
                       required="">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
                <p class="mt-5 mb-3 text-muted">©2021</p>
            </form>
        </div>
    </div>
</div>