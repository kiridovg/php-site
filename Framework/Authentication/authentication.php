<?php


class Authentication{
    private $login = "login";
    private $password = "password";
    private $session;

    public function __construct($session)
    {
        $this->session=$session;
    }

    public function isAuth():bool{
        if ($this->session->contains("is_auth")) {
            return $this->session->get("is_auth");
        }
        else return false;
    }

    public function auth($login, $password):bool{
        if ($login == $this->login && $password == $this->password) {
            $this->session->set("is_auth",true);
            $this->session->set("login",$login);
            return true;
        }
        else {
            $this->session->set("is_auth",false);
            return false;
        }
    }

    public function getLogin(){
        if ($this->isAuth()) {
            return $this->session->get("login");
        }
    }

    public function logOut():void{
        $_SESSION = array();
        $this->session->destroy();
    }

}
