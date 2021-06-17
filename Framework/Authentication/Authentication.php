<?php

namespace Framework\Authentication;

use App\Mapper\UserMapper;
use Framework\Session\Session;

class Authentication
{
    private $login = "login";
    private $password = "password";

    public Session $session;
    public UserMapper $user;

    public function __construct()
    {
        $session = new Session();
        $session->start();
        $this->session = $session;
        //$this->user = new UserMapper();

        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $this->auth($_POST["login"], $_POST["password"]);
        }
    }

    public function isAuth(): bool
    {
        if ($this->session->contains("is_auth")) {
            return $this->session->get("is_auth");
        }
        else return false;
    }

    public function auth($login, $password): bool
    {
        if ($login == $this->login && $password == $this->password) {
            $this->session->set("is_auth", true);
            $this->session->set("login", $login);
            return true;
        } else {
            $this->session->set("is_auth", false);
            return false;
        }
    }

    public function getLogin()
    {
        if ($this->isAuth()) {
            return $this->session->get("login");
        }
    }

    public function logOut(): void
    {
        $this->session->destroy();
    }

}
